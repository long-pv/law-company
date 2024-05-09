<?php
// Setup theme setting page
if (function_exists('acf_add_options_page')) {
	$name_option = 'Theme Setting';
	acf_add_options_page(
		array(
			'page_title' => $name_option,
			'menu_title' => $name_option,
			'menu_slug' => 'theme-general-settings',
			'capability' => 'edit_posts',
			'redirect' => false
		)
	);
}

function dd($data)
{
	echo '<div style="background-color: #c0c0c0; border: 1px solid #ddd; color: #333; padding: 20px; margin: 20px;">';
	echo '<div style="font-size: 20px; font-weight: bold; color: #007bff; margin-bottom: 10px;">Debug Data</div>';
	echo '<div style="font-family: monospace;">';
	echo '<pre>';
	var_dump($data);
	echo '</pre>';
	echo '</div>';
	echo '</div>';
	die();
}

add_action('admin_footer', 'custom_required_featured_image');
function custom_required_featured_image()
{
	global $post_type;

	$post_type_arr = [
		'post',
	];

	if (in_array($post_type, $post_type_arr)) {
		?>
		<script>
			jQuery(document).ready(function ($) {
				$('label[for="postimagediv-hide"]').remove();

				$('#post').submit(function () {
					// Check for featured images
					if ($('#set-post-thumbnail img').length == 0) {
						// image input area
						let postimagediv = $('#postimagediv');

						// Scroll to the image import area
						$('html, body').animate({
							scrollTop: postimagediv.offset().top - 100
						}, 500);

						// show notification
						alert('Please enter Featured image.');

						return false;
					}
				});

				// If an image is selected, remove the 'error' class
				$('#set-post-thumbnail').on('click', function () {
					$('#postimagediv').removeClass('error');
				});
			});
		</script>
		<?php
	}
}