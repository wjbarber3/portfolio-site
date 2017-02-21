<?php get_header(); ?>

<div class="opening">
	<div class="big-logo-container"></div>
	<div class="headline">
		<h1 class="large">Jordan Barber</h1>
		<h2>Front End Developer</h2>
		<h2>Digital Designer</h2>
		<!-- <h2 class="code" onclick="aboutMe();">$(<span class="code-red">this</span>).<span class="code-gold">on</span>("<span class="code-blue">click</span>", <span class="code-gold">aboutMe</span>());</h2> -->
		<!-- <h2 class="about">I...<span class="interests3"></span></h2> -->
		<br>
		<a href="#" class="main-btn" onclick="customScroll(event, about, 50);">About</a>
		<a href="#" class="main-btn" onclick="customScroll(event, featured, 45);">Featured Work</a>
		<a href="/filmic" class="main-btn">KinoFiles</a>
	</div>
	<div class="social">
		<li><a href="https://twitter.com/topazWindow" target="_blank"><i class="fa fa-twitter"></i></a></li>
		<li><a href="https://www.linkedin.com/in/jordan-barber-22711037?trk=hp-identity-name" target="_blank"><i class="fa fa-linkedin"></i></a></li>
		<li><a href="https://github.com/wjbarber3" target="_blank"><i class="fa fa-github"></i></a></li>
		<!-- <li><a href="http://stackoverflow.com/users/3633970/jordanbarber" target="_blank"><i class="fa fa-stack-overflow"></i></a></li> -->
		<div class="vertical"></div>
	</div>
	<div class="companies">
		<p>Grateful to have worked with the following companies</p>
		<svg width="115" height="16"><use xlink:href="#tesla"></use></svg>
		<svg width="104" height="27"><use xlink:href="#solarcity"></use></svg>
		<svg width="94" height="28"><use xlink:href="#crayola"></use></svg>
		<svg width="65" height="37"><use xlink:href="#ally"></use></svg>
		<svg width="123" height="32"><use xlink:href="#uk"></use></svg>
		<svg width="185" height="41"><use xlink:href="#fsu"></use></svg>
		<svg width="87" height="36"><use xlink:href="#philadelphia"></use></svg>
	</div>
</div>

<div id="featured">
	<div class="main-wrap">
		<div class="col-sm-12 image-container mobile-only">
			<img src="/wp-content/themes/jordan/img/kentucky-mockup-angle-1200-opt.png" alt="">
		</div>
		<div class="col-md-6 description">
			<h2>University of Kentucky, Academic Exploration Tool</h2>
			<h2>A Tough Decision Made Simple</h2>
			<h3><span>Role:</span> Front End Developer, UI/UX Designer</h3>
			<p class="award-title">Education Digital Marketing Awards</p>
			<p><i class="fa fa-trophy"></i><span>Gold Medal </span>- Admissions Website</p>
			<p><i class="fa fa-trophy"></i><span>Bronze Medal </span>- Institution Website</p>
			<p class="award-title">UCDA Design Conference</p>
			<p><i class="fa fa-trophy"></i><span>Excellence Award </span>- Admissions Website</p>
			<a href="#" class="secondary-btn">See the case study</a>
		</div>
		<div class="col-sm-6 image-container mobile-hide">
			<img src="/wp-content/themes/jordan/img/kentucky-mockup-angle-1200-opt.png" alt="">
		</div>
		<div class="clearfix"></div>
	</div>
	<svg class="featured-ribbon" width="150" height="150"><use xlink:href="#featured-ribbon"></use></svg>
</div>

<div id="about">
	<div class="description">
		<p class="bg-text">Abou</p>
		<div class="box">
			<h2>A little about me...</h2>
			<p>I place emphasis on clean design and clean code by crafting experiences that are intuitive and easy-to-use and by developing the front-end of those interfaces by writing with a DRY, modular and scalable approach. To do this I write SASS-based, modular CSS using the SMACSS model and object-oriented, modular javascript focused on abstraction and encapsulation. I strive in a team enviroment in which I can work with others to transform ideas and designs into highly usable experiences and work hard to write environments that another developer would enjoy working in.</p>
			<div class="dev-icons">
				<svg width="23" height="23"><use xlink:href="#javascript"></use></svg>
				<svg width="26" height="23"><use xlink:href="#css"></use></svg>
				<svg width="21" height="23"><use xlink:href="#html"></use></svg>
				<svg width="31" height="23"><use xlink:href="#sass"></use></svg>
				<svg width="22" height="23"><use xlink:href="#git"></use></svg>
				<svg width="60" height="23"><use xlink:href="#node"></use></svg>
				<svg width="23" height="23"><use xlink:href="#wordpress"></use></svg>
				<svg width="22" height="23"><use xlink:href="#drupal"></use></svg>
			</div>
		</div>
	</div>
	<div class="quotes">
		<div class="controls">
			<a class="control-left disabled" href=""><i class="fa fa-angle-left"></i></a>
			<a class="control-right" href=""><i class="fa fa-angle-right"></i></a>
		</div>
		<p class="quote active">Jordan is the complete package. He’s smart. He’s talented.
		He writes clean code that is expertly constructed and follows
		best practices. He has the rare combination of elite developer
		skills and an engaging, friendly, thoughtful personality. He hits
		the ground running, and our clients love him. On a scale of 1 to 10,
		I’d rank him about a 12. <span>Max Donnelly<br>-- Principal, Chronos Interactive</span></p>
		<p class="quote">Jordan is one of the most talented and hard working front end developers I’ve had the pleasure to work with. His attention to detail is matched only by his passion for the work. He always pushes the boundaries technically and creatively — taking a good idea and making it great. I only wish I got to work with him more.<span>Mark Gerardot<br>-- Creative Director, Up&amp;Up Agency</span></p>
		<p class="quote">This is a third quote.</p>
		<div class="name-controls">
			<li class="active"><a href="#"><span>Max Donnelly,</span>Chronos Interactive</a></li>
			<li><a href="#"><span>Mark Gerardot,</span>Up&amp;Up Agency</a></li>
			<li><a href="#"><span>Andrew Roberts,</span>The Winter Group</a></li>
		</div>
	</div>
	<div class="clearfix"></div>
</div>

<div id="contact">
	<div class="main-wrap">
		<h2>Let's Work Together</h2>
		<?php gravity_form(1, false, false, false, '', true, 12); ?>
	</div>
</div>

<?php get_footer(); ?>