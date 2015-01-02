<?php
/**
 * Created by IntelliJ IDEA.
 * User: tasos
 * Date: 12/14/14
 * Time: 10:31 PM
 */

require_once('templates/header.php');
require_once('templates/navbar.php');
require_once('templates/footer.php');

$base_url = base_url();

print_header("Contact Us");
$sessionData[] = NULL;
if($this->session->userdata('userID')) {
    $sessionData['userID'] = $this->session->userdata('userID');
    $sessionData['username'] = $this->session->userdata('username');
    $sessionData['userType'] = $this->session->userdata('userType');
}
print_navbar($sessionData);
?>

    <!-- CORE : begin -->
    <div id="core" class="page-contact-us">

        <!-- PAGE HEADER : begin -->
        <div class="page-header has-nav">
            <div class="container">
                <div class="page-header-inner">
                    <h1>Contact Us</h1>
                    <ul class="custom-list breadcrumbs">
                        <li><a href="<?php echo $base_url; ?>home">Home</a> / </li>
                        <li><a href="<?php echo $base_url; ?>home/contact">Contact Us</a></li>
                    </ul>
                    <nav class="page-header-nav">
                        <ul class="custom-list clearfix">
                            <li><a href="<?php echo $base_url; ?>home/about">About Us</a></li>
                            <li class="active"><a href="<?php echo $base_url; ?>home/contact">Contact Us</a></li>
                            <li><a href="<?php echo $base_url; ?>home/privacypolicy">Privacy Policy</a></li>
                            <li><a href="<?php echo $base_url; ?>home/termsconditions">Terms &amp; Conditions</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- PAGE HEADER : end -->

    </div>

<?php print_footer(); ?>