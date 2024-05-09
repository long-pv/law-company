<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package law
 */

get_header();

$current_term = get_queried_object();
$current_term_name = $current_term->name;
?>
<div class="section sec-news">
	<div class="container">
		<div class="row mb-5">
			<div class="col-lg-7">
				<h2 class="heading text-primary">
					<?php echo $current_term_name; ?>
				</h2>
			</div>
		</div>

		<div class="row">
			<?php
			while (have_posts()):
				the_post();
				if (get_the_title()):
					?>
					<div class="col-lg-4 mb-3">
						<div class="card post-entry h-100">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top"
									alt="<?php the_title(); ?>">
							</a>
							<div class="card-body">
								<div>
									<span class="text-uppercase font-weight-bold date">
										<?php echo get_the_date('d/m/Y'); ?>
									</span>
								</div>
								<h5 class="card-title">
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</h5>
								<p>
									<?php echo get_the_excerpt(); ?>
								</p>
							</div>
						</div>
					</div>
					<?php
				endif;
			endwhile;
			?>
		</div>

		<div class="pagination">
			<?php
			echo paginate_links(
				array(
					'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
					'total' => $wp_query->max_num_pages,
					'current' => max(1, get_query_var('paged')),
					'format' => '?paged=%#%',
					'show_all' => false,
					'type' => 'plain',
					'end_size' => 2,
					'mid_size' => 1,
					'prev_next' => true,
					'prev_text' => sprintf('<span class="pagination__prev"></span>'),
					'next_text' => sprintf('<span class="pagination__next"></span>'),
					'add_args' => false,
					'add_fragment' => '',
				)
			);
			?>
		</div>
	</div>
</div>

<?php
get_footer();
