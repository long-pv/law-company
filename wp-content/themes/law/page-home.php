<?php
/**
 * Template name: Home page
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

<?php
$introduce_subtitle = get_field('introduce_subtitle');
$introduce_title = get_field('introduce_title');
$introduce_description = get_field('introduce_description');
$introduce_image = get_field('introduce_image');

if ($introduce_title && $introduce_image):
	?>
	<!-- banner -->
	<div class="hero overlay banner">
		<img src="<?php echo get_template_directory_uri() . '/assets/images/blob.svg'; ?>" alt="" class="img-fluid blob">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6 text-center text-lg-start pe-lg-5">
					<?php if ($introduce_subtitle): ?>
						<h4 class="text-white h4 fw-bold" data-aos="fade-up">
							<?php echo $introduce_subtitle; ?>
						</h4>
					<?php endif; ?>

					<?php if ($introduce_title): ?>
						<h1 class="heading text-white mb-3" data-aos="fade-up">
							<?php echo $introduce_title; ?>
						</h1>
					<?php endif; ?>

					<?php if ($introduce_description): ?>
						<p class="text-white mb-5" data-aos="fade-up" data-aos-delay="100">
							<?php echo $introduce_description; ?>
						</p>
					<?php endif; ?>

					<!-- contact us -->
					<div class="align-items-center mb-5 mm" data-aos="fade-up" data-aos-delay="200">
						<a href="#" class="btn btn-outline-white-reverse">Contact us</a>
					</div>
				</div>
				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
					<?php if ($introduce_image): ?>
						<div class="img-wrap">
							<img src="<?php echo $introduce_image; ?>" alt="<?php echo $introduce_title; ?>"
								class="img-fluid rounded">
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php
$about_us_title = get_field('about_us_title');
$about_us_content = get_field('about_us_content');
$about_us_link = get_field('about_us_link');
$about_us_image = get_field('about_us_image');

if ($about_us_title && $about_us_image):
	?>
	<!-- aboutUs -->
	<div class="section aboutUs">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mb-4 mb-lg-0">
					<?php if ($about_us_image): ?>
						<img src="<?php echo $about_us_image; ?>" alt="<?php echo $about_us_title; ?>" class="img-fluid">
					<?php endif; ?>
				</div>
				<div class="col-lg-6">
					<?php if ($about_us_title): ?>
						<h2 class="heading text-primary mb-3" data-aos="fade-up">
							<?php echo $about_us_title; ?>
						</h2>
					<?php endif; ?>

					<?php if ($about_us_content): ?>
						<div class="editor mb-4">
							<?php echo $about_us_content; ?>
						</div>
					<?php endif; ?>

					<?php
					if ($about_us_link && $about_us_link['url'] && $about_us_link['title']):
						?>
						<a target="<?php echo $about_us_link['target']; ?>" href="<?php echo $about_us_link['url']; ?>"
							class="btn btn-outline-primary py-2">
							<?php echo $about_us_link['title']; ?>
						</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php
$features = get_field('features');

if ($features):
	?>
	<!-- features -->
	<div class="section sec-features features">
		<div class="container">
			<div class="row">
				<?php
				foreach ($features as $item):
					if ($item['title'] && $item['description']):
						?>
						<div class="col-lg-3 mb-3 mb-lg-0">
							<div class="features__item">
								<h3 class="features__itemTitle">
									<?php echo $item['title']; ?>
								</h3>
								<p class="features__itemDesc">
									<?php echo $item['description']; ?>
								</p>
							</div>
						</div>
						<?php
					endif;
				endforeach;
				?>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php
$services_title = get_field('services_title');
$services_description = get_field('services_description');
$services_list = get_field('services_list');

if ($services_title && $services_list):
	?>
	<div class="section sec-services services">
		<div class="container">
			<div class="row mb-5">
				<div class="col-lg-5 mx-auto text-center" data-aos="fade-up">
					<?php if ($services_title): ?>
						<h2 class="heading text-primary">
							<?php echo $services_title; ?>
						</h2>
					<?php endif; ?>

					<?php if ($services_description): ?>
						<p>
							<?php echo $services_description; ?>
						</p>
					<?php endif; ?>
				</div>
			</div>

			<div class="row">
				<?php
				foreach ($services_list as $item):
					if ($item['icon'] && $item['title']):
						?>
						<div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0" data-aos="fade-up">
							<div class="service text-center h-100 mb-0">
								<span class="bi-cash-coin">
									<img src="<?php echo $item['icon']; ?>" alt="<?php echo $item['title']; ?>" width="50"
										height="50">
								</span>
								<div>
									<?php if ($item['title']): ?>
										<h3>
											<?php echo $item['title']; ?>
										</h3>
									<?php endif; ?>

									<?php if ($item['description']): ?>
										<p class="mb-4">
											<?php echo $item['description']; ?>
										</p>
									<?php endif; ?>

									<?php
									$link = $item['link'];
									if ($link && $link['url'] && $link['title']):
										?>
										<p>
											<a target="<?php echo $link['target']; ?>" href="<?php echo $link['url']; ?>"
												class="btn btn-outline-primary py-2 px-3">
												<?php echo $link['title']; ?>
											</a>
										</p>
									<?php endif; ?>
									</p>
								</div>
							</div>
						</div>
						<?php
					endif;
				endforeach;
				?>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php
$register_title = get_field('register_title');
$register_description = get_field('register_description');
$register_background = get_field('register_background') ?: get_template_directory_uri() . '/assets/images/img-3.jpg';

if ($register_title):
	?>
	<div class="section sec-cta overlay" style="background-image: url('<?php echo $register_background; ?>');">
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-5 text-center text-lg-start" data-aos="fade-up" data-aos-delay="0">
					<?php if ($register_title): ?>
						<h2 class="heading">
							<?php echo $register_title; ?>
						</h2>
					<?php endif; ?>

					<?php if ($register_description): ?>
						<p>
							<?php echo $register_description; ?>
						</p>
					<?php endif; ?>
				</div>
				<div class="col-lg-5 text-center text-lg-end" data-aos="fade-up" data-aos-delay="100">
					<a href="#" class="btn btn-outline-white-reverse">Contact us</a>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>


<?php
// query post
$args = array(
	'post_type' => 'post',
	'posts_per_page' => 3,
	'meta_query' => array(
		array(
			'key' => '_thumbnail_id',
			'compare' => 'EXISTS'
		),
	),
);

$query_news = new WP_Query($args);

if ($query_news->have_posts()):
	?>
	<div class="section sec-news">
		<div class="container">
			<div class="row mb-5">
				<div class="col-lg-7">
					<h2 class="heading text-primary">
						<?php _e('Tin tức', 'law'); ?>
					</h2>
				</div>
			</div>

			<div class="row">
				<?php
				while ($query_news->have_posts()):
					$query_news->the_post();
					if (get_the_title()):
						?>
						<div class="col-lg-4 mb-3 mb-lg-0">
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
				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php
get_footer();
