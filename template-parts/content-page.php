<?php
/**
 * Template part for displaying page content in page.php
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package tperialize
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 <div class="card">
    <div class="card-image">
 <?php if ( has_post_thumbnail() ) {
 the_post_thumbnail();
 } else { ?>
 <img src="<?php bloginfo('template_directory'); ?>/timg/live.png" alt="<?php the_title(); ?>" />
 <?php } ?>
     <span class="card-title"> 
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
 <div class="card-content">
 <div class="entry-content">
 <?php
 /* translators: %s: Name of current post */
  if (! is_single()) {
 the_excerpt( sprintf(
 __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'immaterial' ),
 the_title( '<span class="screen-reader-text">"', '"</span>', false )
 ) );
 } else {
 the_content( sprintf(
 __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'immaterial' ),
 the_title( '<span class="screen-reader-text">"', '"</span>', false )
 ) );
 }
 ?>
 
 <?php
 wp_link_pages( array(
 'before' => '<div class="page-links">' . __( 'Pages:', 'immaterial' ),
 'after'  => '</div>',
 ) );
 ?>
 </div><!-- .entry-content -->
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'tperialize' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
