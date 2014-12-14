<?php
/**
 * Created by IntelliJ IDEA.
 * User: tasos
 * Date: 12/14/14
 * Time: 6:15 PM
 */

function print_navbar() {
    $base_url = base_url();
    echo <<< EOF
<body class="enable-fixed-header enable-inview-animations">

<!-- HEADER : begin -->
<header id="header">
    <div class="container">
        <div class="header-inner clearfix">

            <!-- HEADER BRANDING : begin -->
            <div class="header-branding">
                <a href="{$base_url}home"><img src="{$base_url}assets/img/logo.png" alt="Casa" /></a>
            </div>
            <!-- HEADER BRANDING : end -->

            <!-- HEADER NAVBAR : begin -->
            <div class="header-navbar">

                <!-- HEADER MENU : begin -->
                <div class="header-menu">
                    <button class="header-btn">Menu <i class="fa fa-angle-down"></i></button>
                    <nav class="header-nav">
                        <ul>
                            <li><a href="{$base_url}home">Home</a></li>
                            <li><a href="{$base_url}home/about">About Us</a></li>
                            <li><a href="{$base_url}home/contact">Contact Us</a></li>
                            <li><a href="{$base_url}home/privacypolicy">Privacy Policy</a></li>
                            <li><a href="{$base_url}home/termsconditions">Terms &amp; Conditions</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- HEADER MENU : end -->

                <!-- HEADER TOOLS : begin -->
                <div class="header-tools">

                    <!-- HEADER LANGUAGE : begin -->
                    <div class="header-language">
                        <button class="header-btn">EN <i class="fa fa-angle-down"></i></button>
                        <nav class="header-nav">
                            <ul class="custom-list">
                                <li class="active"><a href="#">EN</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- HEADER LANGUAGE : end -->

                    <!-- HEADER REGISTER : begin -->
                    <div class="header-register">
                        <button class="register-toggle header-btn"><i class="fa fa-plus-circle"></i> Register</button>
                        <div class="header-form">
                            <form action="index.html" class="default-form" />
                            <p class="alert-message warning"><i class="ico fa fa-exclamation-circle"></i> All fields are required! <i class="fa fa-times close"></i></p>
                            <p class="form-row">
                                <input class="required" type="text" placeholder="Username" />
                            </p>
                            <p class="form-row">
                                <input class="required email" type="text" placeholder="Email" />
                            </p>
                            <p class="form-row">
                                <input class="required" type="password" placeholder="Password" />
                            </p>
                            <p class="form-row">
                                <input class="required" type="password" placeholder="Repeat Password" />
                            </p>
                            <p class="form-row">
                                <button class="submit-btn button"><i class="fa fa-plus-circle"></i> Register</button>
                            </p>
                            </form>
                        </div>
                    </div>
                    <!-- HEADER REGISTER : end -->

                    <!-- HEADER LOGIN : begin -->
                    <div class="header-login">
                        <button class="login-toggle header-btn"><i class="fa fa-power-off"></i> Login</button>
                        <div class="header-form">
                            <form action="index.html" class="default-form" />
                            <p class="alert-message warning"><i class="ico fa fa-exclamation-circle"></i> All fields are required! <i class="fa fa-times close"></i></p>
                            <p class="form-row">
                                <input class="required email" type="text" placeholder="Email" />
                            </p>
                            <p class="form-row">
                                <input class="required" type="password" placeholder="Password" />
                            </p>
                            <p class="form-row">
                                <button class="submit-btn button"><i class="fa fa-power-off"></i> Login</button>
                            </p>
                            <p class="form-row forgot-password">
                                <a href="#">Forgot Password?</a>
                            </p>
                            </form>
                        </div>
                    </div>
                    <!-- HEADER LOGIN : end -->


                </div>
                <!-- HEADER TOOLS : end -->

            </div>
            <!-- HEADER NAVBAR : end -->

            <!-- SEARCH TOGGLE : begin -->
            <button class="search-toggle button"><i class="fa fa-search"></i></button>
            <!-- SEARCH TOGGLE : end -->

            <!-- NAVBAR TOGGLE : begin -->
            <button class="navbar-toggle button"><i class="fa fa-bars"></i></button>
            <!-- NAVBAR TOGGLE : end -->

        </div>
    </div>
</header>
<!-- HEADER : end -->
EOF;
}
