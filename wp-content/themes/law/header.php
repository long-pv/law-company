<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package law
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>


	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<div class="row g-0 align-items-center">
						<div class="col-2">
							<a href="index.html" class="logo m-0 float-start">Financing<span
									class="text-primary">.</span></a>
						</div>
						<div class="col-8 text-center ">
							<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
								<li class="active"><a href="index.html">Home</a></li>
								<li class="has-children">
									<a href="financing.html">Pages</a>
									<ul class="dropdown">
										<li><a href="financing.html">Financing</a></li>
										<li><a href="single.html">Blog Single</a></li>
										<li><a href="#">Case Study Detail</a></li>
										<li><a href="#">Menu One</a></li>
										<li><a href="#">Menu Two</a></li>
										<li class="has-children">
											<a href="#">Dropdown</a>
											<ul class="dropdown">
												<li><a href="#">Sub Menu One</a></li>
												<li><a href="#">Sub Menu Two</a></li>
												<li><a href="#">Sub Menu Three</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="services.html">Services</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-2 text-end">
							<a href="#"
								class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
								<span></span>
							</a>

							<a href="#" class="call-us d-flex align-items-center">
								<span class="icon-phone"></span>
								<span>123-489-9381</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>