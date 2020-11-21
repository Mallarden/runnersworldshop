<?php
/*
Template Name: Page Builder
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

<div class="container-fluid pt-5">
		<div class="row">
			<div class="col-lg-4 col-sm-12 top-row top-left-image">
				<!-- <img src="<?php echo get_template_directory_uri(); ?>/images/2130490.jpeg"/> -->
				<div class="top-image-inner">
					<div class="test">
						<h1 class="text-white pb-4 font-weight:bold;">En</h1>
						<a href="#" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Primary link</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-12 top-row top-mid-image">
				<!-- <img src="<?php echo get_template_directory_uri(); ?>/images/2130490.jpeg"/> -->
				<div class="top-image-inner">
					<div class="test">
						<h1 class="text-white pb-4 font-weight:bold;">En</h1>
						<a href="#" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Primary link</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-sm-12 top-row top-right-image">
				<!-- <img src="<?php echo get_template_directory_uri(); ?>/images/2142472.png"/> -->
				<div class="top-image-inner">
					<div class="test">
						<h1 class="text-white pb-4 font-weight:bold;">test</h1>
						<a href="#" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Primary link</a>
					</div>
				</div>
			</div>
		</div>
	</div>