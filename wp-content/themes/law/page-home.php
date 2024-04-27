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

<!-- banner -->
<div class="hero overlay banner">
	<img src="<?php echo get_template_directory_uri() . '/assets/images/blob.svg'; ?>" alt="" class="img-fluid blob">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="col-lg-6 text-center text-lg-start pe-lg-5">
				<h4 class="text-white h4 fw-bold" data-aos="fade-up">VĂN PHÒNG LUẬT SƯ SỐ VII</h4>
				<h1 class="heading text-white mb-3" data-aos="fade-up">Chữ tín cao hơn tất cả</h1>
				<p class="text-white mb-5" data-aos="fade-up" data-aos-delay="100">Văn phòng Luật sư số VII được thành
					lập từ ngày 25/9/2002 với phương châm “Chữ tín cao hơn tất cả”,  và mục tiêu cung cấp các dịch vụ
					pháp lý chuyên nghiệp và hiệu quả cho các cá nhân, doanh nghiệp trong nước và nước ngoài đầu tư hoặc
					kinh doanh tại Việt Nam.</p>
				<div class="align-items-center mb-5 mm" data-aos="fade-up" data-aos-delay="200">
					<a href="#" class="btn btn-outline-white-reverse me-4">Contact us</a>
				</div>
			</div>
			<div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
				<div class="img-wrap">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/img-1.jpg'; ?>" alt="Image"
						class="img-fluid rounded">
				</div>
			</div>
		</div>
	</div>
</div>

<!-- aboutUs -->
<div class="section aboutUs">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mb-4 mb-lg-0">
				<img src="<?php echo get_template_directory_uri() . '/assets/images/img-1.jpg'; ?>" alt="Image"
					class="img-fluid">
			</div>
			<div class="col-lg-6">
				<h2 class="heading text-primary mb-3" data-aos="fade-up">Our Services</h2>
				<div class="editor mb-4">
					<p>
						Văn phòng Luật sư số VII được thành lập từ ngày 25/9/2002 với phương châm “Chữ tín cao hơn tất
						cả”, 
						và mục tiêu cung cấp các dịch vụ pháp lý chuyên nghiệp và hiệu quả cho các cá nhân, doanh nghiệp
						trong nước và nước ngoài đầu tư hoặc kinh doanh tại Việt Nam. Luôn trung thành với mục tiêu đó,
						Văn
						phòng Luật sư số VII ngày nay đã là một trong những hãng luật hàng đầu tại Việt Nam trong các
						lĩnh
						vực: Tư vấn, hỗ trợ các dịch vụ pháp lý; Tranh tụng; Thực hiện các thủ tục hành chính…
					</p>
					<p>
						Để được đánh giá cao, Văn phòng Luật sư số VII đã phát triển được đội ngũ Luật sư và Cố vấn cao
						cấp
						có trình độ, giàu kinh nghiệm và chuyên nghiệp, được đào tạo và hành nghề trong nước và ở nước
						ngoài
						nhiều năm. Họ có khả năng chia sẻ các mối quan tâm của khách hàng và cùng khách hàng giải quyết
						các
						thách thức, khó khăn pháp lý.
					</p>
					<p>
						Đến nay, chúng tôi đã có gần 2000 khách hàng đã tin tưởng và sử dụng dịch vụ. Chúng tôi luôn tự
						tin
						là một trong những Văn phòng Luật sư cung cấp dịch vụ tốt nhất tại Hà Nội nói riêng và cả nước
						nói
						chung. Hãy đến với Văn phòng chúng tôi để được trải nghiệm dịch vụ pháp lý tốt nhất!
					</p>
				</div>
				<a href="#" class="btn btn-outline-primary py-2">
					Xem thêm
				</a>
			</div>
		</div>
	</div>
</div>

<!-- features -->
<div class="section sec-features features">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="features__item">
					<h3 class="features__itemTitle">
						1000+
					</h3>
					<p class="features__itemDesc">
						Client
					</p>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="features__item">
					<h3 class="features__itemTitle">
						95%
					</h3>
					<p class="features__itemDesc">
						Successful Cases
					</p>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="features__item">
					<h3 class="features__itemTitle">
						~ 10m
					</h3>
					<p class="features__itemDesc">
						Recovered cost for clients
					</p>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="features__item">
					<h3 class="features__itemTitle">
						30+
					</h3>
					<p class="features__itemDesc">
						Professional Attorneys
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
