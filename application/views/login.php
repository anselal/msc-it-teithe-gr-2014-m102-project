<?php
/**
* Created by IntelliJ IDEA.
* User: tasos
* Date: 11/3/14
* Time: 9:37 PM
*/
?>
<!--
<div class="container">
    <form class="form-signin" role="form" action="users/login" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" name="username" class="form-control" placeholder="User name" required autofocus>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
    <center><?php if($error==1) { ?>
            <h3 style="color:red">Your username / password did not match.</h3>
        <? } ?>
    </center>
</div> <!-- /container -->

<?php
if($this->session->userdata("username")) {
    redirect(base_url());
}
?>

<!-- Custom styles for this template -->
<?php $this->load->helper('html'); echo link_tag('frontend/css/signin.css'); ?>

<div class="container">
    <?php
    $form_attributes = array(
        'class' => 'form-signin',
        'role' => 'form'
    );
    $username = array(
        'name' => 'username',
        'class' => 'form-control',
        'placeholder' => 'User name',
        'required' => '',
        'autofocus' => ''
    );
    $password = array(
        'name' => 'password',
        'class' => 'form-control',
        'placeholder' => 'Password',
        'required' => ''
    );
    $submit = array(
        'class' => 'btn btn-lg btn-primary btn-block',
        'value' => 'Submit'
    );
    echo form_open('users/login', $form_attributes);
    echo "<h2 class='form-signin-heading'>Please sign in</h2>";
    echo form_input($username);
    echo form_password($password);
    echo form_submit($submit);
    echo form_close();
    ?>
    <center><?php if($error==1) { ?>
            <h3 style="color:red">Your username / password did not match.</h3>
        <? } ?>
    </center>
</div> <!-- /container -->
