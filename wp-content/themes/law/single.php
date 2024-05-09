<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package law
 */

get_header();
?>

<div class="hero overlay inner-page">
	<img src="<?php echo get_template_directory_uri() . '/assets/images/blob.svg'; ?>" alt="" class="img-fluid blob">
	<div class="container">
		<div class="row align-items-center justify-content-center text-center">
			<div class="col-lg-6">
				<p data-aos="fade-up" class="meta">
					<?php echo get_the_date('d/m/Y'); ?>
				</p>
				<h1 class="heading text-white mb-3" data-aos="fade-up" data-aos-delay="100">
					<?php the_title(); ?>
				</h1>
			</div>
		</div>
	</div>
</div>

<div class="section">
	<div class="container article">
		<div class="row justify-content-center align-items-stretch">
			<article class="col-lg-9 order-lg-2">
				<div class="editor">
					<?php the_content(); ?>
				</div>

				<?php
				// handle next, previos links   
				$post_prev = get_adjacent_post(true, 'news', false);
				$post_next = get_adjacent_post(true, 'news', true);
				if ($post_prev || $post_next):
					?>
					<div class="post-single-navigation d-flex align-items-stretch mt-5">
						<?php
						if ($post_prev):
							?>
							<a href="<?php echo get_permalink($post_prev->ID); ?>" class="mr-auto w-50 h-100 pr-4">
								<span class="d-block"><?php _e('Trước', 'law'); ?></span>
								<?php echo get_the_title($post_prev->ID); ?>
							</a>
						<?php endif; ?>

						<?php
						if ($post_next):
							?>
							<a href="<?php echo get_permalink($post_next->ID); ?>" class="ml-auto w-50 h-100 text-right pl-4">
								<span class="d-block"><?php _e('Sau', 'law'); ?></span>
								<?php echo get_the_title($post_next->ID); ?>
							</a>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</article>
		</div>
	</div>
</div>

<?php
get_footer();
