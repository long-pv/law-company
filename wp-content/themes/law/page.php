<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package law
 */

get_header();
?>
<div class="container py-5">
	<div class="row justify-content-center">
		<div class="col-lg-10">
			<div class="editor">
				<h1 class="mb-4 text-primary text-center">
					<?php the_title(); ?>
				</h1>

				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
