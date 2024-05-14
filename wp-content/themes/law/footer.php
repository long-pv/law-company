<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package law
 */

?>
</main>
<footer class="bg-light py-5">
	<div class="container">
		<div class="row">
			<?php
			if (get_field('title_page', 'option')):
				?>
				<div class="col-12">
					<h3 class="mb-3 mb-lg-0">
						<?php echo get_field('title_page', 'option'); ?>
					</h3>
				</div>
			<?php endif; ?>

			<div class="col-lg-4 mb-4 mb-lg-0">
				<div class="header__logo">
					<?php $logo_url = get_template_directory_uri() . '/assets/images/logo_1.png'; ?>
					<img src="<?php echo $logo_url; ?>" alt="logo">
				</div>
			</div>

			<div class="col-lg-4 mb-4 mb-lg-0">
				<div class="editor">
					<?php echo get_field('contact_us', 'option'); ?>
				</div>
			</div>

			<?php
			if (get_field('iframe_google_map', 'option')):
				?>
				<div class="col-lg-4">
					<div class="video">
						<?php echo get_field('iframe_google_map', 'option'); ?>
					</div>
				</div> <!-- /.col-lg-4 -->
			<?php endif; ?>
		</div> <!-- /.row -->
	</div> <!-- /.container -->
</footer> <!-- /.site-footer -->


<?php wp_footer(); ?>

</body>

</html>