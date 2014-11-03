<?php
/**
 * Created by IntelliJ IDEA.
 * User: tasos
 * Date: 11/3/14
 * Time: 9:37 PM
 */


include_once('header.php'); ?>

    <div class="container">

        <form class="form-signin" role="form">
            <h2 class="form-signin-heading">Please sign in</h2>
            <input type="email" class="form-control" placeholder="Email address" required autofocus>
            <input type="password" class="form-control" placeholder="Password" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>

    </div> <!-- /container -->

    <!-- Custom styles for this template -->
    <link href="../frontend/css/signin.css" rel="stylesheet">

<?php include_once('footer.php'); ?>