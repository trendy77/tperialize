<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tperialize
 */

get_header(); ?>

<main>
      <div class="parallax-container valign-wrapper">
       <div class="parallax"><img src="timg/sm5.jpeg" alt="background img 1"></div>
 <?php include ('t1.php'); ?>    
  </div>
    <div class="section black">
 			<?php include('m1.php'); ?>	
			</div>  
				<div class="section">
					<div class="parallax-container valign-wrapper">
					<div class="parallax"><img src="timg/sm2.jpeg" alt="background img 1"></div>
					<div class="container black no-padding">
					<div class="row">
   	<div class="col s6">
	
 <?php if ( have_posts() ) : ?>
 
 <?php /* Start the Loop */ ?>
 <?php while ( have_posts() ) : the_post(); ?>
 
 <?php
 /* Include the Post-Format-specific template for the content.
 * If you want to override this in a child theme, then include a file
 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
 */
 get_template_part( 'content', get_post_format() );
 ?>
 
 <?php endwhile; ?>
 
 <?php the_posts_navigation(); ?>
 
 <?php else : ?>
 
 <?php get_template_part( 'content', 'none' ); ?>
 
 <?php endif; ?>
  </div>
   </div>
    </div>
	 </div>
	  </div>
	   
  
 </main><!-- #main -->
 </div><!-- #primary -->
 
	
 <div class="row">
   <div id="primary" class="content-area col s12 m7 l8">
 <main id="main" class="site-main" role="main">
 
 
 
 
 
 <?php get_sidebar(); ?>
 </div><!-- /row -->
<?php get_footer(); ?>