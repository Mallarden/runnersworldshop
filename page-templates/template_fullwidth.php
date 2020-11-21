<?php
/*
Template Name: Fullwidth
*/

get_header(); ?>
<div id="primary" class="content-area fullwidth">
	<main id="main" class="site-main" role="main">
	<div class="container">
  <div class="row">
    
    <div class="col-xs-12 col-sm-4 top-left">
        <div class="box">
			<div class="test">
			    <h1 class="text-white pb-4 font-weight:bold;">RW Kolleksjon</h1>
				<a href="#" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Klikk her</a>
			</div>
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-4 top-mid">
        <div class="box">
		    <div class="test">
				<h1 class="text-white pb-4 font-weight:bold;">Virtuelle løp</h1>
				<a href="#" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Klikk her</a>
			</div>
        </div>
    </div>
    
    <div class="col-xs-12 col-sm-4 top-right">
        <div class="box">
			<div class="test">
				<h1 class="text-white pb-4 font-weight:bold;">Trening</h1>
				<a href="#" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Klikk her</a>
			</div>
        </div>
    </div>
    
  </div>
</div>
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
