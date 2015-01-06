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
print_header("Register");
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
                    <h1>Register</h1>
                    <ul class="custom-list breadcrumbs">
                        <li><a href="<?php echo $base_url; ?>home">Home</a> / </li>
                        <li><a href="<?php echo $base_url; ?>home/about">Register</a></li>
                    </ul>
                    <nav class="page-header-nav">
                        <ul class="custom-list clearfix">
                            <li class="active"><a href="<?php echo $base_url; ?>home/about">Create New Account</a></li>
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

                        <h2>Register</h2>
                        <p>To facilitate your registration we inform you that all the fields are required.</p>
                        <p>The field Name requires at least 4 characters,the field Username requires at least 5 characters, the field Password requires at least 4 characters and the field Repeat Password must be the same with the previous.</p>
                        <p class="cta-button">
                            <a href="#" class="button"><i class="fa fa-heart"></i> Get Started!</a>
                        </p>

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
                            'placeholder' => 'Name'));
                        echo"</p>";

                        echo form_input(array(
                            'name' => 'username',
                            'value' => $this->input->post('username'),
                            'placeholder' => 'Username'));
                        echo"</p>";

                        echo form_input(array(
                            'name' => 'email',
                            'value' => $this->input->post('email'),
                            'placeholder' => 'Email'));
                        echo"</p>";

                        echo form_password(array(
                            'name' => 'password',
                            'value' => $this->input->post('password'),
                            'placeholder' => 'Password'));
                        echo"</p>";

                        echo form_password(array(
                            'name' => 'r_password',
                            'value' => $this->input->post('rpassword'),
                            'placeholder' => 'Repeat Password'));
                        echo"</p>";
                        echo form_submit('register_submit','Register');
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