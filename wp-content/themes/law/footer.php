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

<footer class="bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3>
					VĂN PHÒNG LUẬT SƯ SỐ VII
				</h3>
			</div>
			<div class="col-lg-4">
				<div class="header__logo">
					<?php $logo_url = get_template_directory_uri() . '/assets/images/logo.png'; ?>
					<img src="<?php echo $logo_url; ?>" alt="logo">
				</div>
			</div> <!-- /.col-lg-4 -->
			<div class="col-lg-4">
				<div class="editor">
					<p>
						Địa chỉ: 165 Giảng Võ, Cát Linh, Đống Đa, Hà Nội
					</p>
					<p>
						SĐT: 096 622 7979
					</p>
					<p>
						Hotline: 096 622 7979
					</p>
					<p>
						Email: vanphongluatsuso7hn@gmail.com
					</p>
					<p>
						Website: www.vanphongluatsuso7.vn
					</p>
				</div>
			</div> <!-- /.col-lg-4 -->
			<div class="col-lg-4">
				<div class="video">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.444665788569!2d105.7799171749155!3d21.014886630631004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab554eba8445%3A0xcf9a816d7e57b044!2zTeG7hSBUcsOsIEjhuqEsIE3hu4UgVHLDrCwgVOG7qyBMacOqbSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1714264548322!5m2!1svi!2s"
						width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div> <!-- /.col-lg-4 -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->
</footer> <!-- /.site-footer -->


<?php wp_footer(); ?>

</body>

</html>