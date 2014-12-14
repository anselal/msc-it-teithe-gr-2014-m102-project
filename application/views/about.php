<?php
/**
 * Created by IntelliJ IDEA.
 * User: tasos
 * Date: 12/14/14
 * Time: 10:04 PM
 */

require_once('templates/header.php');
require_once('templates/navbar.php');
require_once('templates/footer.php');

$base_url = base_url();

print_header("About Us");
print_navbar();
?>

		<!-- CORE : begin -->
		<div id="core" class="page-about-us">

			<!-- PAGE HEADER : begin -->
			<div class="page-header has-nav">
				<div class="container">
					<div class="page-header-inner">
						<h1>About Casa</h1>
						<ul class="custom-list breadcrumbs">
							<li><a href="<?php echo $base_url; ?>home">Home</a> / </li>
							<li><a href="<?php echo $base_url; ?>home/about">About Us</a></li>
						</ul>
						<nav class="page-header-nav">
							<ul class="custom-list clearfix">
								<li class="active"><a href="<?php echo $base_url; ?>home/about">About Us</a></li>
								<li><a href="<?php echo $base_url; ?>home/contact">Contact Us</a></li>
								<li><a href="<?php echo $base_url; ?>home/privacypolicy">Privacy Policy</a></li>
								<li><a href="<?php echo $base_url; ?>home/termsconditions">Terms &amp; Conditions</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- PAGE HEADER : end -->

			<!-- CONTENT SECTION : begin -->
			<section class="content-section">
				<div class="container">

					<div class="row">
						<div class="col-sm-6">

							<h2>About Casa</h2>
							<p>Casa was made to make your travelling around the world more exciting and less expensive!</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.</p>
							<p class="cta-button">
								<a href="#" class="button"><i class="fa fa-heart"></i> Get Started!</a>
							</p>

						</div>
						<div class="col-sm-6">

							<p><img src="<?php echo $base_url; ?>assets/img/content_img_01.jpg" alt="" /></p>

						</div>
					</div>

				</div>
			</section>
			<!-- CONTENT SECTION : end -->
		</div>
		<!-- CORE : end -->

<?php print_footer(); ?>