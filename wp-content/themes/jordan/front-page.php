<?php get_header(); ?>

<div class="opening">
	<div class="big-logo-container"></div>
	<div class="headline">
		<h1 class="large">Jordan Barber</h1>
		<h2>Front End Developer <span>/</span></h2>
		<h2>Digital Designer <span>/</span></h2>
		<!-- <h2>Auteur Film Writer</h2> -->
		<h2>Cinephile</h2>
		<a href="#" class="main-btn">About</a>
		<a href="#" class="main-btn" onclick="customScroll(event, featured);">Featured Work</a>
		<a href="/filmic" class="main-btn">KinoFiles</a>
	</div>
	<div class="social">
		<li><a href="https://twitter.com/topazWindow" target="_blank"><i class="fa fa-twitter"></i></a></li>
		<li><a href="https://www.linkedin.com/in/jordan-barber-22711037?trk=hp-identity-name" target="_blank"><i class="fa fa-linkedin"></i></a></li>
		<li><a href="https://github.com/wjbarber3" target="_blank"><i class="fa fa-github"></i></a></li>
		<li><a href="http://stackoverflow.com/users/3633970/jordanbarber" target="_blank"><i class="fa fa-stack-overflow"></i></a></li>
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

<?php get_footer(); ?>