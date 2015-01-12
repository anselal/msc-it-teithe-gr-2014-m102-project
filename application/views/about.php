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

print_header("Η εταιρεία μας");
$sessionData[] = NULL;
if($this->session->userdata('userID')) {
    $sessionData['userID'] = $this->session->userdata('userID');
    $sessionData['username'] = $this->session->userdata('username');
    $sessionData['userType'] = $this->session->userdata('userType');
}
print_navbar($sessionData);
?>

		<!-- CORE : begin -->
		<div id="core" class="page-about-us">

			<!-- PAGE HEADER : begin -->
			<div class="page-header has-nav">
				<div class="container">
					<div class="page-header-inner">
						<h1>Η εταιρεία μας</h1>
						<ul class="custom-list breadcrumbs">
							<li><a href="<?php echo $base_url; ?>home">Αρχική</a> / </li>
							<li><a href="<?php echo $base_url; ?>home/about">Η εταιρεία μας</a></li>
						</ul>
						<nav class="page-header-nav">
							<ul class="custom-list clearfix">
                                <li class="active"><a href="<?php echo $base_url; ?>home/about">Η εταιρεία μας</a></li>
                                <li><a href="<?php echo $base_url; ?>home/contact">Επικοινωνία</a></li>
                                <li><a href="<?php echo $base_url; ?>home/privacypolicy">Η πολιτική μας</a></li>
                                <li><a href="<?php echo $base_url; ?>home/termsconditions">Όροι Χρήσης</a></li>
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

							<h2>Λίγα λόγια για το Casa</h2>
							<p>To Casa δημιουργήθηκε για να κάνει τα ταξίδια σας σε όλον τον κόσμο πιο συναρπαστικά και πιο οικονομικά!</p>

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