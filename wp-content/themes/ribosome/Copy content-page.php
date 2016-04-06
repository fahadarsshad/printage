<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Ribosome
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
			<div style="width:30%; height:300px; padding:0 10px 0 0;float:left; overflow: hidden; ">
			<?php
				if (is_front_page() ):
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
							<h1 class="entry-title"><?php the_title(); ?></h1>
						</header>
					    <?php
					    the_content();
					  endwhile;
					}
					wp_reset_query();  // Restore global post data stomped by the_post().
				endif;		
			?>
			</div>

			<div style="width:30%; height:300px; padding:0 10px 0 0;float:left; overflow: hidden;">
			<?php
				if ( is_front_page() ) :
					$yourpostid = 18; // <--- replace with your specific post id
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
							<h1 class="entry-title"><?php the_title(); ?></h1>
						</header>
					    <?php
					    the_content();
					  endwhile;
					}
					wp_reset_query();  // Restore global post data stomped by the_post().
			
				endif;		
			?>
			</div>

			<div style="width:30%; height:300px; padding:0 10px 0 0;float:right; overflow: hidden;">
			<?php
				if ( is_front_page() ) :
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
							<h1 class="entry-title"><?php the_title(); ?></h1>
						</header>
					    <?php
					    the_content();
					  endwhile;
					}
					wp_reset_query();  // Restore global post data stomped by the_post().
			
				endif;		
			?>
			</div>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'ribosome' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'ribosome' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
