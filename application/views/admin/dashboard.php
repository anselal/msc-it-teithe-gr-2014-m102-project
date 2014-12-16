<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php
    foreach($css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
    <link rel="icon" href="<?php echo site_url(); ?>assets/img/favicon.png">
    <title>Project Casa - Admin Panel</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo site_url() ; ?>assets/library/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo site_url() ; ?>assets/library/css/justified-nav.css" rel="stylesheet">
</head>
<body>
<?php $currentMethod = $this->router->fetch_method() ?>
<div class="container">
    <div class="masthead">
        <h3 class="text-muted">
            <img src="<? echo site_url(); ?>assets/img/favicon.png">Project Casa - Admin Panel
        </h3>
        <div role="navigation">
            <ul class="nav nav-justified">
                <li>
                    <a href="<?php echo site_url(); ?>">Home</a>
                </li>
                <li <?php if($currentMethod=="hotels") echo "class='active'"; ?> >
                    <a href="<?php echo site_url(); ?>admin/hotels">Hotels</a>
                </li>
                <li <?php if($currentMethod=="rooms") echo "class='active'"; ?> >
                    <a href="<?php echo site_url(); ?>admin/rooms">Rooms</a>
                </li>
                <li <?php if($currentMethod=="reservations") echo "class='active'"; ?> >
                    <a href="<?php echo site_url(); ?>admin/reservations">Reservations</a>
                </li>
                <li <?php if($currentMethod=="users") echo "class='active'"; ?> >
                    <a href="<?php echo site_url(); ?>admin/users">Users</a>
                </li>
                <li>
                    <a href="#">Logout</a>
                </li>
            </ul>
        </div>
    </div>
    <br>
    <div id="grocery-table">
        <?php echo $output; ?>
    </div>
</div> <!-- /container -->
<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="<?php site_url() ; ?>assets/library/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="<?php echo site_url() ; ?>assets/library/js/ie-emulation-modes-warning.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="<?php echo site_url() ; ?>assets/library/js/html5shiv.min.js"></script>
<script src="<?php echo site_url() ; ?>assets/library/js/respond.min.js"></script>
<![endif]-->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo site_url() ; ?>assets/library/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>