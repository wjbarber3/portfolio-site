<?php ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="col-sm-4 case-study">
		<div class="inner" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
			<div class="shadow"></div>
			<div class="case-overlay">
				<h3><?php echo the_title(); ?></h3>
				<a href="<?php echo the_permalink(); ?>">View Case Study</a>
			</div>
		</div>
	</div>

<?php endwhile; endif; ?>
