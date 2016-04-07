<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Ribosome
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if(is_front_page() ): ?>
		<!--custom view-->
		<div style="width:45%; height:300px; padding:0 10px 0 0;float:left; overflow: hidden; ">
		<?php 
		$yourpostid = 34; // <--- replace with your specific post id
					$args=array(
					  'p' => $yourpostid,
					  'post_type' => 'post',
					  'post_status' => 'publish',
					  'posts_per_page' => 1,
					  'caller_get_posts'=> 1
					);
					$my_query = null;
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) {
					  while ($my_query->have_posts()) : $my_query->the_post(); ?>
					  	<header class="entry-header">
							<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
							
						</header>
					    <?php ?>
					    <?php
					    the_excerpt();
					    
					  endwhile;
					}
					wp_reset_query();  // Restore global post data stomped by the_post().
		?>
		</div>
		<div style="width:45%; height:300px; padding:0 10px 0 0;float:left; overflow: hidden; ">
			
		<?php 
		$yourpostid = 16; // <--- replace with your specific post id
					$args=array(
					  'p' => $yourpostid,
					  'post_type' => 'post',
					  'post_status' => 'publish',
					  'posts_per_page' => 1,
					  'caller_get_posts'=> 1
					);
					$my_query = null;
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) {
					  while ($my_query->have_posts()) : $my_query->the_post(); ?>
					  	<header class="entry-header">
							<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
						</header>
					    <?php
					    echo get_the_post_thumbnail('16');
					     the_excerpt();
					  endwhile;
					}
					wp_reset_query();  // Restore global post data stomped by the_post().
		?>
		</div>
		<?php  else: ?>
		<header class="entry-header">
			<?php if ( ! is_page_template( 'page-templates/front-page.php' ) ) : ?>
			<?php the_post_thumbnail(); ?>
			<?php endif; ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header>
		
		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'ribosome' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php  endif; ?>
		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'ribosome' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
