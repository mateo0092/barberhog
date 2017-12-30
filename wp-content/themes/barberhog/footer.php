<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package barberhog
 */
?>
<!-- 			</div> -->
<!-- 		</div> -->
<!-- 	</div> --><!-- #content -->

	<?php do_action('barberhog_before_footer'); ?>

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

    <a class="go-top"><i class="fa fa-angle-up"></i></a>
		
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<span style="text-transform: uppercase;">
				Barberhog copyright &copy; <?php echo date('Y') == '2017' ? date('Y') : '2017 - '.date('Y'); ?>
			</span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<?php do_action('barberhog_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
