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

	<header id="header" class="header">
		<div class="container">
			<div class="header__navInner">
				<div class="header__logo">
					<?php $logo_url = get_template_directory_uri() . '/assets/images/logo.png'; ?>
					<img src="<?php echo $logo_url; ?>" alt="logo">
				</div>

				<div class="header__nav header__menupc">
					<?php
					if (has_nav_menu('menu-1')) {
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'container' => 'nav',
								'container_class' => '',
								'depth' => 1,
							)
						);
					}
					?>
				</div>
			</div>
		</div>
	</header>