<?php
/**
 * Created by IntelliJ IDEA.
 * User: apostolia
 * Date: 1/3/15
 * Time: 11:48 PM
 */
require_once('templates/header.php');
require_once('templates/navbar.php');
require_once('templates/footer.php');

$base_url = base_url();
print_header("Δημιουργία Λογαριασμού");
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
                    <h1>Δημιουργία Λογαριασμού</h1>
                    <ul class="custom-list breadcrumbs">
                        <li><a href="<?php echo $base_url; ?>home">Αρχική</a> / </li>
                        <li><a href="<?php echo $base_url; ?>home/about">Δημιουργία Λογαριασμού</a></li>
                    </ul>
                    <nav class="page-header-nav">
                        <ul class="custom-list clearfix">
                            <li class="active"><a href="<?php echo $base_url; ?>home/about">Δημιουργία Λογαριασμού</a></li>
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

                        <h2>Εγγραφή</h2>
                        <p>Για να διευκολύνουμε την εγγραφή, σας ενημερώνουμε ότι απαιτείται η συμπλήρωση όλων των πεδίων.</p>
                        <p>Το πεδίο «Όνομα» απαιτεί τουλάχιστον 4 χαρακτήρες, το πεδίο «Όνομα χρήστη» απαιτεί τουλάχιστον 5 χαρακτήρες, το πεδίο «Συνθηματικό» απαιτεί τουλάχιστον 4 χαρακτήρες και το πεδίο «Επανάληψη συνθηματικού» πρέπει να είναι ίδιο με το προηγούμενο. Επίσης στο πεδίο «Email» πρέπει να εισάγετε μια έγκυρη ηλεκτρονική διεύθυνση.  </p>

                    </div>
                    <div class="col-sm-6">

                        <?php
                        if(isset($registered_successful)) {
                            echo $registered_successful;
                        }
                        if(isset($user_exists)) {
                            echo $user_exists;
                        }
                        if(isset($email_exists)) {
                            echo $email_exists;
                        }
                        echo validation_errors();

                        echo form_open('users/register');

                        echo form_input(array(
                            'name' => 'name',
                            'value' => $this->input->post('name'),
                            'placeholder' => 'Όνομα'));
                        echo"</p>";

                        echo form_input(array(
                            'name' => 'username',
                            'value' => $this->input->post('username'),
                            'placeholder' => 'Όνομα χρήστη'));
                        echo"</p>";

                        echo form_input(array(
                            'name' => 'email',
                            'value' => $this->input->post('email'),
                            'placeholder' => 'Email'));
                        echo"</p>";

                        echo form_password(array(
                            'name' => 'password',
                            'value' => $this->input->post('password'),
                            'placeholder' => 'Συνθηματικό'));
                        echo"</p>";

                        echo form_password(array(
                            'name' => 'r_password',
                            'value' => $this->input->post('rpassword'),
                            'placeholder' => 'Επανάληψη συνθηματικού'));
                        echo"</p>";

                        echo form_submit(array(
                            'name' => 'register_submit',
                            'id' => 'register_submit',
                            'class' => 'button',
                            'value' => 'Δημιουργία Λογαριασμού'
                        ));
                        echo"</p>";
                        echo form_close();

                        ?>

                    </div>
                </div>

            </div>
        </section>
        <!-- CONTENT SECTION : end -->
    </div>
    <!-- CORE : end -->


<?php
print_footer();
?>