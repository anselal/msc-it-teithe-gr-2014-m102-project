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

print_header("Επικοινωνία");
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
                        <li><a href="<?php echo $base_url; ?>home">Αρχική</a> / </li>
                        <li><a href="<?php echo $base_url; ?>home/contact">Επικοινωνία</a></li>
                    </ul>
                    <nav class="page-header-nav">
                        <ul class="custom-list clearfix">
                            <li><a href="<?php echo $base_url; ?>home/about">Η εταιρεία μας</a></li>
                            <li class="active"><a href="<?php echo $base_url; ?>home/contact">Επικοινωνία</a></li>
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
                    <div class="col-sm-4">

                        <h2>Casa</h2>
                        <h5>Διεύθυνση Επικοινωνίας</h5>
                        <p>Αλεξάνδρειο Τεχνολογικό Ίδρυμα Θεσσαλονίκης<br />
                            Σχολή Τεχνολογικών Εφαρμογών<br />
                            Τμήμα Πληροφορικής</p>
                        <p>Πρόγραμμα Μεταπτυχιακών Σπουδών<br />
                            Ευφυείς Τεχνολογίες Διαδικτύου</p>
                        <p>ΑΤΕΙ Θεσσαλονίκης<br />
                            Τ.Θ.: 141 GR<br />
                            Τ.Κ.: 57400<br />
                            Τηλ.: 2310013946<br />
                            Φαξ: 2310 796256</p>

                    </div>
                    <div class="col-sm-7">
                        <div class="contact-form-container">

                            <?php
                                if(isset($contact_email_sent)) {
                                    echo $contact_email_sent;
                                }
                                echo '</p>' ;
                                echo validation_errors();
                                echo form_open('users/contact_email');

                                echo '<div class="row">' ;
                                echo '<div class="col-sm-6">' ;

                                echo form_input(array(
                                    'name' => 'field_name',
                                    'value' => set_value('field_name'),
                                    'placeholder' => 'Όνομα',
                                    'required' => ''));

                                echo '</div>' ;
                                echo '<div class="col-sm-6">' ;

                                echo form_input(array(
                                    'name' => 'field_email',
                                    'value' => set_value('field_email'),
                                    'placeholder' => 'Email',
                                    'required' => ''));

                                echo '</div>' ;
                                echo '</div>' ;
                                echo '</p>' ;
                                echo '<div class="row">' ;
                                echo '<div class="col-sm-6">' ;

                                echo form_input(array(
                                    'name' => 'field_phone',
                                    'value' => set_value('field_phone'),
                                    'placeholder' => 'Τηλέφωνο',
                                    'required' => ''));

                                echo '</div>' ;
                                echo '<div class="col-sm-6">' ;

                                echo form_dropdown('field_subject',
                                    array(
                                        '' => 'Σκοπός επικοινωνίας',
                                        'Say Hello'  => 'Αφήστε ένα μήνυμα',
                                        'Ask a question'    => 'Ρωτήστε μας κάτι',
                                        'Αφήστε κάποιο σχόλιο'   => 'Αφήστε κάποιο σχόλιο'),
                                    '', // default value
                                    'id="field_subject" name="field_subject" required data-placeholder="Subject"');

                                echo '</div>' ;
                                echo '</div>' ;
                                echo '</p>' ;

                                echo form_textarea(array(
                                    'name' => 'field_message',
                                    'value' => set_value('field_message'),
                                    'placeholder' => 'Message',
                                    'rows' => 5,
                                    'cols' => 50,
                                    'required' => ''));

                                echo '<button class="button submit-btn" data-loading-label="Sending...">
                                      <i class="fa fa-envelope"></i> Αποστολή Μηνύματος
                                      </button>' ;

                                echo form_button(array(
                                    'name' => 'field_reset',
                                    'id' => 'field_reset',
                                    'value' => 'true',
                                    'type' => 'reset',
                                    'class' => 'button',
                                    'content' => 'Καθαρισμός φόρμας'
                                ));



                                echo form_close();
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CONTENT SECTION : end -->
    </div>
    <!-- CORE : end -->

<?php print_footer(); ?>
