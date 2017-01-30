<?php get_header(); ?>

<!-- <canvas id="canvas"></canvas> -->

<!-- <script>
	var canvas=document.getElementById('canvas'),
		screen=window.screen,
		width=canvas.width=screen.width,
		height=canvas.height=screen.height,
		p=Array(256).join(1).split(''),
		context=canvas.getContext("2d"),
		math=Math;

setInterval(function(){
  context.fillStyle="rgba(24,24,24,0.05)";
	context.fillRect(0,0,width,height);
	// context.fillStyle="rgba(152,166,138,1)";
	context.fillStyle="rgba(50,50,50,1)";
	p=p.map(function(v,i){
		random=math.random();
		var str = String.fromCharCode(math.floor(2720+random*33));
		context.fillText(str,i*10,v);
		v+=10;
		var ret = v>768+random*1e4?0:v
		return ret;
	});
},33);
</script> -->

<!-- <div class="right-sparkle">
    <div class="sparkle"></div>
</div> -->

<div class="opening">
	<div class="headline">
		<h1 class="large">Jordan Barber</h1>
		<h1>Front End Developer <span>/</span></h2>
		<h1>Digital Designer</h2>
	</div>
	<div class="social">
		<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
		<li><a href="https://www.linkedin.com/in/jordan-barber-22711037?trk=hp-identity-name" target="_blank"><i class="fa fa-linkedin"></i></a></li>
		<li><a href="#" target="_blank"><i class="fa fa-github"></i></a></li>
		<li><a href="#" target="_blank"><i class="fa fa-stack-overflow"></i></a></li>
		<div class="vertical"></div>
	</div>
</div>

<?php get_footer(); ?>