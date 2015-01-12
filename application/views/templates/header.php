<?php
/**
 * Created by IntelliJ IDEA.
 * User: tasos
 * Date: 11/3/14
 * Time: 9:37 PM
 */

function print_header($title="Αρχική") {
    $base_url = base_url();
    echo <<< EOF
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{$title}</title>
    <link rel="shortcut icon" href="{$base_url}assets/img/favicon.png" />

    <!-- STYLESHEETS : begin -->
    <link rel="stylesheet" type="text/css" href="{$base_url}assets/library/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{$base_url}assets/library/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="{$base_url}assets/library/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="{$base_url}assets/library/css/animate.custom.css" />
    <link rel="stylesheet" type="text/css" href="{$base_url}assets/library/css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="{$base_url}assets/library/css/style.css" />
    <link rel="stylesheet" type="text/css" href="{$base_url}assets/library/css/skins/default.css" />
    <!--link rel="stylesheet" type="text/css" href="{$base_url}assets/library/css/custom.css"> uncomment if you want to use custom CSS definitions -->
    <!-- STYLESHEETS : end -->

    <!--[if lte IE 8]>
    <link rel="stylesheet" type="text/css" href="{$base_url}assets/library/css/oldie.css" />
    <script src="{$base_url}assets/library/js/respond.min.js" type="text/javascript"></script>
    <![endif]-->
    <script src="{$base_url}assets/library/js/modernizr.custom.min.js" type="text/javascript"></script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
EOF;

}
?>