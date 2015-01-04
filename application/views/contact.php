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
$this->load->helper('form');
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

        <!-- CONTENT SECTION : begin -->
        <section class="content-section">
            <div class="container">

                <div class="row">
                    <div class="col-sm-4">

                        <h2>Casa HQ</h2>
                        <h5>Postal Address</h5>
                        <p>PO Box 16122 Collins Street West<br />
                            Victoria 8007 Australia<br />
                            Envato Headquarters</p>
                        <p>121 King Street, Melbourne<br />
                            Victoria 3000 Australia<br />
                            Envato Pty Ltd</p>
                        <p>ABN 11 119 159 741<br />
                            Phone: +61 3 8376 6284</p>

                    </div>
                    <div class="col-sm-7">

                        <div class="contact-form-container">
                            <h5>Send Us a Message</h5>
                            <?php echo validation_errors(); ?>

                            <?php echo form_open('email/contact_email'); ?>

                            <!-- FORM VALIDATION ERROR MESSAGE : begin -->
                            <p class="alert-message warning validation" style="display: none;"><i class="ico fa fa-exclamation-circle"></i><strong>All fields are required!</strong></p>
                            <!-- FORM VALIDATION ERROR MESSAGE : end -->

                            <!-- SENDING REQUEST ERROR MESSAGE : begin -->
                            <p class="alert-message warning request" style="display: none;"><i class="ico fa fa-exclamation-circle"></i><strong>Form not sent!</strong><br />There was a connection problem. Try again later.</p>
                            <!-- SENDING REQUEST ERROR MESSAGE : end -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <p><input type="text" id="field_name" name="field_name" required placeholder="Name" /></p>
                                </div>
                                <div class="col-sm-6">
                                    <p><input type="text" id="field_email" name="field_email" required placeholder="Email" /></p>
                                    <p class="contact-hp-email">
                                        <input type="text" id="field_email_hp" name="field_email_hp" />
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p><input type="text" id="field_phone" name="field_phone" required placeholder="Phone" /></p>
                                </div>
                                <div class="col-sm-6">
                                    <p>
                                        <select id="field_subject" name="field_subject" required data-placeholder="Subject">
                                            <option value="hello" />Say Hello
                                            <option value="question" />Ask a question
                                            <option value="feedback" />Leave Feedback
                                        </select>
                                    </p>
                                </div>
                            </div>
                            <p><textarea id="field_message" name="field_message" required placeholder="How can we help you?"></textarea></p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="form-note">All fields are required</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="form-submit"><button class="button submit-btn" data-loading-label="Sending..."><i class="fa fa-envelope"></i> Send Message</button></p>
                                </div>
                            </div>

                            </form>

                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- CONTENT SECTION : end -->

    </div>
    <!-- CORE : end -->


<?php print_footer(); ?>
