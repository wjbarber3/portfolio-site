<?php ?>
<!doctype html>
<html class="no-js" lang="">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="http://d3js.org/d3.v3.min.js"></script>
    </head>

    <style>
        body{ margin:100px; }
        .volume-bar{ fill:#61d9f2; }
        .aa-bar{ fill:#7bd56a; }
        .ae-bar{ fill:#f7d359; }
        .ar-bar{ fill:#f86a7f; }
        svg{ padding:60px; background-color:#f4f4f4; box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24); }
        .axis path, .y-axis .tick line { fill: none; stroke: #cfcfcf; shape-rendering: crispEdges; }
        .y-axis path { opacity: 0; }
        .x-axis line { opacity: 0; }
        .tick text { fill: #091620; font-family: "Arial", sans-serif; font-weight: bold; font-size: 8px; }
        .svg-wrapper::before{ text-align: center; width: 550px; position: absolute; height: 30px; color: white; background-color: #091620; font-size: 16px; font-family: "Arial", sans-serif; font-weight: 800; vertical-align: super; display: table-cell; padding: 4px; }
        .volume-wrapper::before { content: 'Volume'; }
        .aa-wrapper::before { content: 'AA'; }
        .ae-wrapper::before { content: 'AE'; }
        .ar-wrapper::before { content: 'AR'; }
        .graph-wrap { width: 49%; display: inline-block; position: relative; margin-bottom: 30px; }
        .time-control{ position: absolute; bottom: 7px; left: 2px; }
    </style>

    <body>
        <div class="graph-wrap">
            <svg width="550" height="357" id="volume"></svg>
            <div class="time-control">
                <button class="minus" onclick="timespanDecrease(event);">-</button>
                <i class="fa fa-clock-o"></i>
                <button class="plus" onclick="timespanIncrease(event);">+</button>
            </div>
        </div>
        <div class="graph-wrap">
            <svg width="550" height="357" id="aa"></svg>
            <div class="time-control">
                <button class="minus" onclick="timespanDecrease(event);">-</button>
                <i class="fa fa-clock-o"></i>
                <button class="plus" onclick="timespanIncrease(event);">+</button>
            </div>
        </div>
        <div class="graph-wrap">
            <svg width="550" height="357" id="ae"></svg>
            <div class="time-control">
                <button class="minus" onclick="timespanDecrease(event);">-</button>
                <i class="fa fa-clock-o"></i>
                <button class="plus" onclick="timespanIncrease(event);">+</button>
            </div>
        </div>
        <div class="graph-wrap">
            <svg width="550" height="357" id="ar"></svg>
            <div class="time-control">
                <button class="minus" onclick="timespanDecrease(event);">-</button>
                <i class="fa fa-clock-o"></i>
                <button class="plus" onclick="timespanIncrease(event);">+</button>
            </div>
        </div>
        <div class="graph-wrap">
            <svg width="550" height="357" id="ai"></svg>
            <div class="time-control">
                <button class="minus" onclick="timespanDecrease(event);">-</button>
                <i class="fa fa-clock-o"></i>
                <button class="plus" onclick="timespanIncrease(event);">+</button>
            </div>
        </div>
    </body>

</html>

 <script>

    var graphTypes = ['volume', 'aa', 'ae', 'ar'],
        spanLevel = 0;

    graphTypes.forEach(function(item){
        buildGraphs(item);
        $('svg#' + item).wrap('<div class="' + item + '-wrapper svg-wrapper"></div>');
        timespanIncrease = function(e) {
            spanLevel ++;
            buildGraphs(item);
        }
        timespanDecrease = function(e) {
            spanLevel = spanLevel - 1;
            buildGraphs(item);
        }
    });

    function buildGraphs(type) {

        var parseDate = d3.time.format("%Y-%m-%d %H:%M:%S").parse,// use d3's built in time format to format our SQL timestamp
            amountsArray = [], // This array will eventually be populated with volumes per hourRanges
            largest, // we'll use this to set the domain of our y axis
            svg = d3.select("#" + type),
            offset = 30, // offset variable used to add consistent horizontal spacing
            margin = { top: 20, right: 20, bottom: 30, left: 40 },
            width = $('#' + type).attr("width") - margin.left - margin.right,
            height = $('#' + type).attr("height") - margin.top - margin.bottom;

        if ( spanLevel == 0 ) {
            var timeRange = ["12am - 3:59am", "4am - 7:59am", "8am - 11:59am", "12pm - 3:59pm", "4pm - 7:59pm", "8pm - 11:59am"],
                hourRanges = ["0-3.9", "4-7.9", "8-11.9", "12-15.9", "16-19.9", "20-24"],
                divideBy = 4;
        } else if ( spanLevel == 1 ) {
            var timeRange = ["12am - 2:59am", "3am - 5:59am", "6am - 8:59am", "9am - 11:59am", "12pm - 2:59pm", "3pm - 5:59pm", "6pm - 8:59pm", "9pm - 11:59pm"],
                hourRanges = ['0-2.9', '3-5.9','6-8.9','9-11.9','12-14.9','15-17.9', '18-20.9', '21-24'],
                divideBy = 3;
        } else if ( spanLevel == 2 ) {
            var timeRange = ["12am - 1:59am", "2am - 3:59am", "4am - 5:59am", "6am - 7:59am", "8am - 9:59am", "10am - 11:59am", "12pm - 1:59pm", "2pm - 3:59pm", "4pm - 5:59pm", "6pm - 7:59pm", "8pm - 9:59pm", "10pm - 11:59pm"],
                hourRanges = ['0-1.9', '2-3.9','4-5.9','6-7.9','8-9.9','10-11.9', '12-13.9', '14-15.9', '16-17.9', '18-19.9', '20-21.9', '22-24' ],
                divideBy = 2;
        }

        $('#'+type).empty();

        d3.json("/wp-content/themes/jordan/js/data2.json", function(data){

            if ( type == "aa" || type == "ar" || type == "ae" ) {
                var newList = [];
                for (var i = 0; i < data.length; i++) {
                    if (data[i].type === type) {
                        newList.push(data[i]);
                    }
                }
                data = newList;
            }

            // we want to map our data to an array with the hours from sql timestamps
            data = data.map(function(d) {
                return parseDate(d.time).getHours();
            });
                                                                                    // console.log(data);
            // This maps the hours into the ranges set in  our 'hourRanges' array
            data = d3
                    .nest()
                        .key(function(d){
                    return hourRanges[Math.floor(d/divideBy)];
                    })
                    .entries(data);
                                                                                     // console.log(data);
            // sort the data so that our bars will be in order
            data.sort(function(a,b){
                return parseFloat(a.key) - parseFloat(b.key);
            });

                                                                                    // console.log(data);
            // This function will return the highest volume from our time periods                                                                 
            getLargestVolume = function(data) {
                // loop through the ranges
                for ( i = 0; i < data.length; i++ ) {
                    // get the length of each range (which is the volume)
                    amounts = data[i].values.length;
                    // and push them to the array
                    amountsArray.push(amounts);
                }
                // Return the largest volume
                largest = Math.max.apply(Math, amountsArray);
                return largest;
            }

            // run the above function on our sorted data
            getLargestVolume(data);

            // Build x and y domains, range and axes
            var x = d3.scale.linear().domain([0, data.length]).range([0, width]),
                y = d3.scale.linear().domain([0, largest]).range([height-60, 0]),
                xAxis = d3.svg
                            .axis()
                            .scale(x)
                            .orient("bottom")
                            .ticks(data.length)
                            .tickFormat(function(index){
                                var xTicks = timeRange;
                                return xTicks[index];
                            }),
                yAxis = d3.svg
                            .axis()
                            .scale(y)
                            .orient("left")
                            .tickSize(-(width - offset), 0, 0);

            // Build the y-axis svg element
            svg
                .append("g")
                .attr("class", "y-axis axis")
                .attr("id", "yax")
                .attr("height", height)
                .attr("transform", "translate(0,0)")
                .call(yAxis);

            // Build the x-axis svg element
            svg
                .append("g")
                .attr("class", "x-axis axis")
                .attr("width", width - offset)
                .attr("height", 2)
                .attr("transform", "translate(" + offset + "," + ( height - 60 ) + ")")
                .call(xAxis);

            // Build the svg bars
            bar = svg
                    .append("g")
                    .selectAll("g")
                    .data(data)
                    .enter().append("rect")
                    .attr("height","0")
                    .attr("transform", function(data, index){
                        return 'translate(' + (x(index) + offset) + ',' + y(amountsArray[index]) + ')';
                    })
                    .attr("width", 12)
                    .attr("rx", 0)
                    .attr("class", type + "-bar");

            bar
                .transition()
                .duration(200)
                .attr("height", function(data, index){
                    return y(0) - y(amountsArray[index]);
                })
        });
    }

</script>