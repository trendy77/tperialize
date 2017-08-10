<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tperialize
 */

get_header();
 				 while (have_posts()) : the_post();
							$image_url = get_post_thumbnail($post->ID);
								if($image_url <> ''){ 
									echo '<figure class="featured-img"><a href="'.get_permalink().'" ><img src="'.$image_url.'" alt="" ></a></figure>';
								}
                            the_content();
							wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'Rocky' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) );
                        endwhile; 
						if ( comments_open() ) { 
					 		comments_template('', true); 
						}
						wp_reset_query();
                    ?>
                	</div>
			<?php }		?>
<?php get_footer();?>
<!-- Columns End -->


 <div class="row">
 <div id="primary" class="content-area col s12 m7 l8">
 <main id="main" class="site-main" role="main">
 
	<div id="primary" class="content-area">
	

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
get_sidebar();
?>
 </div>
 <?php
get_footer();
