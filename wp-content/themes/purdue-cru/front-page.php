<?php
/**
 * The template for displaying the home page
 *
 * This is the template that displays the home page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package purdue-cru
 */

get_header(); ?>
<div id="fountain-image">
  <div id="box-container">
    <div class="boxes" id="box1">
      <img>
      <p>box1</p>
    </div>
    <div class="boxes" id="box2">
      <a href="http://www.purduecru.com/thursday-night-cru/">
        <img src="http://www.purduecru.com/wp-content/uploads/2017/01/thursday-night-cru.png">
        <p>Come to our weekly meeting</p>
      </a>
    </div>
    <div class="boxes" id="box3">
      <img>
      <p>box2</p>
    </div>
  </div>
</div>
<div id="content" class="site-content">
	<div id="front-primary" class="content-area">
		<main id="main" class="site-main" role="main">

<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
     <!-- <img src="wp-content/themes/purdue-cru/images/thursday-night-cru.png">-->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();
