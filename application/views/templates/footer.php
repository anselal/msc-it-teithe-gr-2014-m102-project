<?php
/**
 * Created by IntelliJ IDEA.
 * User: tasos
 * Date: 11/3/14
 * Time: 9:35 PM
 */

function print_footer() {
    $base_url = base_url();
    echo <<< EOF
<!-- BOTTOM PANEL : begin -->
<aside id="bottom-panel">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">

                <!-- ABOUT WIDGET : begin -->
                <div class="widget about-widget">
                    <div class="widget-content">
                        <p><img src="{$base_url}assets/img/logo_footer.png" alt="Casa" /></p>
                        <p>Casa is a modern way of planning and spending your vacation. Enjoy your holiday the best you can!</p>
                    </div>
                </div>
                <!-- ABOUT WIDGET : end -->

            </div>
            <div class="col-sm-6">

                <!-- LINKS WIDGET : begin -->
                <div class="widget links-widget">
                    <h3 class="widget-title"><span>Χρήσιμοι Σύνδεσμοι</span></h3>
                    <div class="widget-content">
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="custom-list">
                                    <li><a href="{$base_url}home">Αρχική</a></li>
                                    <li><a href="{$base_url}home/about">Η εταιρεία μας</a></li>
                                    <li><a href="{$base_url}home/contact">Επικοινωνία</a></li>
                                </ul>
                            </div>
                            <div class="col-md-8">
                                <ul class="custom-list">
                                    <li><a href="mailto:t.selalmazidis@gmail.com">Αναστάσιος Σελαλμαζίδης</a></li>
                                    <li><a href="mailto:apostolia2000@gmail.com">Αποστολία Βατμανίδου</a></li>
                                    <li><a href="mailto:tassos@papafylakis.gr">Αναστάσιος Παπαφυλάκης</a></li>
                                    <li><a href="mailto:mariampouzinou@yahoo.gr">Μαρία Μπουζίνου</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- LINKS WIDGET : end -->

            </div>

        </div>
    </div>
</aside>
<!-- BOTTOM PANEL : end -->

<!-- FOOTER : begin -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">

                <!-- FOOTER TEXT : begin -->
                <p>Copyright 2014 &copy; Casa. Με την επιφύλαξη όλων των δικαιωμάτων.</p>
                <!-- FOOTER TEXT : end -->

            </div>
            <div class="col-sm-4">

                <!-- FOOTER SOCIAL : begin -->
                <ul class="footer-social custom-list">
                    <li><a href="#" title="Facebook"><i class="fa fa-facebook-square"></i><span>Facebook</span></a></li>
                    <li><a href="#" title="Twitter"><i class="fa fa-twitter-square"></i><span>Twitter</span></a></li>
                    <li><a href="#" title="Google+"><i class="fa fa-google-plus-square"></i><span>Google+</span></a></li>
                </ul>
                <!-- FOOTER SOCIAL : end -->

            </div>
        </div>
    </div>
</footer>
<!-- FOOTER : end -->

<!-- SCRIPTS : begin -->
<script src="{$base_url}assets/library/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="{$base_url}assets/library/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
<script src="{$base_url}assets/library/js/jquery.ba-outside-events.min.js" type="text/javascript"></script>
<script src="{$base_url}assets/library/js/jquery.inview.min.js" type="text/javascript"></script>
<!--[if lte IE 8]>
<script src="{$base_url}assets/library/js/jquery.placeholder.js" type="text/javascript"></script>
<![endif]-->
<script src="{$base_url}assets/library/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="{$base_url}assets/library/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="{$base_url}assets/library/js/scripts.js" type="text/javascript"></script>
<!-- SCRIPTS : end -->

</body>
</html>
EOF;

}