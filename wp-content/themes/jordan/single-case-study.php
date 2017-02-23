<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="case-<?php echo get_field('short_name'); ?>">

		<div class="hero" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
				<div class="shadow"></div>
				<div class="hero-overlay">
					<h1 class="large"><?php echo get_field('hero_title'); ?></h1>
				</div>				
			</div>
		</div>

		<div class="mockup">
			<?php $mock_image = get_field('mockup_image'); ?>
			<img src="<?php echo $mock_image['url']; ?>" alt="">
		</div>

		<div class="case-study-info">
			<?php $bg_logo = get_field('info_background_logo'); ?>
			<div class="brief" style="background-image:url(<?php echo $bg_logo['url']; ?>);background-color:<?php the_field('brand_primary_color'); ?>">
				<h4>Project Info</h4>
				<p><?php the_field('project_info'); ?></p>
			</div>
			<div class="case-study-tech">
				<h4>Tool/Technology Used</h4>
			</div>
		</div>

	</div>

<?php endwhile; endif; ?>