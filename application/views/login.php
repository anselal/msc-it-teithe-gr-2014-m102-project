<?php
/**
* Created by IntelliJ IDEA.
* User: tasos
* Date: 11/3/14
* Time: 9:37 PM
*/
?>

<div class="container">
    <form class="form-signin" role="form" action="<?=base_url()?>index.php/users/login" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="username" name="username" class="form-control" placeholder="User name" required autofocus>
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

<!-- Custom styles for this template -->
<link href="../../frontend/css/signin.css" rel="stylesheet">
