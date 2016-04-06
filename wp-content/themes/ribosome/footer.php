<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package Ribosome
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<div class="credits credits-left"><?php echo wp_kses_post(get_theme_mod('ribosome_footer_text_left', __('Copy Rights '.date('Y'), 'ribosome'))); ?></div>
			<div class="credits credits-center"><?php echo wp_kses_post(get_theme_mod('ribosome_footer_text_center', __('Khlid Business Center, H3 Johar Town Lahore,Pakistan', 'ribosome'))); ?></div>
			<div class="credits credits-right">
			<a href="<?php echo RIBOSOME_AUTHOR_URI; ?>/wordpress-themes/ribosome">Ribosome</a> <?php _e('by', 'ribosome'); ?> GalussoThemes.com<br />
			<?php _e('Powered by', 'ribosome'); ?><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ribosome' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'ribosome' ); ?>"> WordPress</a>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php
	if (get_theme_mod('ribosome_boton_ir_arriba', 1) == 1){ ?>
		<div class="ir-arriba"><i class="fa fa-arrow-up"></i></div>
	<?php } 
	
wp_footer(); ?>

</body>
</html>