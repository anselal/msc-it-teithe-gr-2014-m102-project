<?php
/**
 * Created by IntelliJ IDEA.
 * User: tasos
 * Date: 11/17/14
 * Time: 5:40 PM
 */
?>

<?php

if($this->session->userdata("userType")!="admin") {
    //show_error('<h1 style="color:red">Access denied</h1>');
    redirect(base_url());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Area</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <?php
        $this->load->helper('html');
        echo link_tag('frontend/css/simple-sidebar.css');
    ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                Admin Panel
            </li>
            <li>
                <a href="#dashboard" id="dashboard">Dashboard</a>
            </li>
            <li>
                <a href="#hotels" id="hotels">Hotels</a>
            </li>
            <li>
                <a href="#rooms" id="rooms">Rooms</a>
            </li>
            <li>
                <a href="#roomtypes" id="roomtypes">Room Types</a>
            </li>
            <li>
                <a href="#reservations" id="reservations">Reservations</a>
            </li>
            <li>
                <a href="#users" id="users">Users</a>
            </li>
            <li>
                <a href="logout">Logout <b>(<?=$this->session->userdata('username'); ?>)</b></a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <a href="#menu-toggle" id="menu-toggle">Toggle Menu <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span></a>
    <div id="page-content-wrapper">
        <?=$this->load->view('admin/index')?>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $( document ).ready(function () {
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

        $("#dashboard").click(function () {
            $.ajax({
                type: 'POST',
                url: 'admin/index',
                success: function(resp) { //When the request is successfully completed, this function will be executed
                    //Activate and fill in the matches list
                    $("#page-content-wrapper").html(resp);
                }
            });
        });

        $("#hotels").click(function () {
            $.ajax({
                type: 'POST',
                url: 'admin/hotels',
                success: function(resp) { //When the request is successfully completed, this function will be executed
                    //Activate and fill in the matches list
                    $("#page-content-wrapper").html(resp);
                }
            });
        });

        $("#rooms").click(function () {
            $.ajax({
                type: 'POST',
                url: 'admin/rooms',
                success: function(resp) { //When the request is successfully completed, this function will be executed
                    //Activate and fill in the matches list
                    $("#page-content-wrapper").html(resp);
                }
            });
        });

        $("#roomtypes").click(function () {
            $.ajax({
                type: 'POST',
                url: 'admin/roomtypes',
                success: function(resp) { //When the request is successfully completed, this function will be executed
                    //Activate and fill in the matches list
                    $("#page-content-wrapper").html(resp);
                }
            });
        });

        $("#reservations").click(function () {
            $.ajax({
                type: 'POST',
                url: 'admin/reservations',
                success: function(resp) { //When the request is successfully completed, this function will be executed
                    //Activate and fill in the matches list
                    $("#page-content-wrapper").html(resp);
                }
            });
        });

        $("#users").click(function () {
            $.ajax({
                type: 'POST',
                url: 'admin/users',
                success: function(resp) { //When the request is successfully completed, this function will be executed
                    //Activate and fill in the matches list
                    $("#page-content-wrapper").html(resp);
                }
            });
        });
    });




</script>

</body>

</html>
