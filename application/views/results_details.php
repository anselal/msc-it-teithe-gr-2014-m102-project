<?php
/**
 * Created by IntelliJ IDEA.
 * User: tasos
 * Date: 12/14/14
 * Time: 7:57 PM
 */

require_once('templates/header.php');
require_once('templates/navbar.php');
require_once('templates/footer.php');

$base_url = base_url();

print_header("Results Details");
print_navbar();
?>


    <!-- CORE : begin -->
    <div id="core" class="page-property-details">

    <!-- PAGE HEADER : begin -->
    <div class="page-header">
        <div class="container">
            <div class="page-header-inner clearfix">
                <h1>Hacienda in Mexico - Book</h1>
                <ul class="custom-list breadcrumbs">
                    <li><a href="<?php echo $base_url; ?>home">Home</a> / </li>
                    <li><a href="<?php echo $base_url; ?>results">Search Results</a> /</li>
                    <li><a href="<?php echo $base_url; ?>results/details">Property Details</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- PAGE HEADER : end -->

    <!-- MAIN WRAPPER : begin -->
    <div class="main-wrapper-container">
        <div class="container">
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-8 col-md-push-4">

                        <!-- PROPERTY DETAILS : begin -->
                        <div class="property-details">

                            <!-- PROPERTY IMAGES : begin -->
                            <div class="property-images">
                                <div class="image-list">
                                    <div class="image"><img src="<?php echo $base_url; ?>assets/img/property_01.jpg" alt="Short photo description should go right here" /></div>
                                    <div class="image"><img src="<?php echo $base_url; ?>assets/img/property_02.jpg" alt="Short photo description should go right here" /></div>
                                    <div class="image"><img src="<?php echo $base_url; ?>assets/img/property_03.jpg" alt="Short photo description should go right here" /></div>
                                </div>
                                <div class="images-footer">
                                    <div class="images-footer-inner">
                                        <div class="image-description"></div>
                                        <div class="image-counter"></div>
                                    </div>
                                    <button class="prev-btn"><i class="fa fa-chevron-left"></i></button>
                                    <button class="next-btn"><i class="fa fa-chevron-right"></i></button>
                                </div>
                            </div>
                            <!-- PROPERTY IMAGES : end -->

                            <div class="row">
                                <div class="col-md-8">

                                    <!-- PROPERTY DESCRIPTION : begin -->
                                    <div class="property-description">

                                        <!-- DESCRIPTION TEXT : begin -->
                                        <div class="description-text">
                                            <h4>Object Description</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. Quisque semper justo at risus. Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel tempus metus leo non est.</p>
                                        </div>
                                        <!-- DESCRIPTION TEXT : end -->

                                    </div>
                                    <!-- PROPERTY DESCRIPTION : end -->

                                </div>
                                <div class="col-md-4">

                                    <!-- PROPERTY PANEL : begin -->
                                    <div class="property-panel">

                                        <!-- OBJECT PRICE : begin -->
                                        <div class="panel-item object-price">
                                            <h4 class="panel-item-title">Price</h4>
                                            <p class="price">from <strong>$37</strong>/ night</p>
                                        </div>
                                        <!-- OBJECT PRICE : end -->

                                        <!-- OBJECT RATING : begin -->
                                        <div class="panel-item object-rating">
                                            <h4 class="panel-item-title">Object Rating</h4>
                                            <p class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></p>
                                        </div>
                                        <!-- OBJECT RATING : end -->

                                        <!-- BOOK FORM : begin -->
                                        <div class="panel-item book-form">
                                            <h4 class="panel-item-title">Book Now</h4>
                                            <form class="default-form" action="<?php echo $base_url; ?>results/details" />
                                            <p class="alert-message warning validation" style="display: none;"><i class="ico fa fa-exclamation-circle"></i> Please fill all fields!</p>
                                            <p class="form-row">
															<span class="calendar-input input-left" title="Arrival">
																<input type="text" name="arrival" class="required" placeholder="Arrival" data-dateformat="m/d/y" />
																<i class="fa fa-calendar"></i>
															</span>
                                            </p>
                                            <p class="form-row">
															<span class="calendar-input input-left" title="Departure">
																<input type="text" name="departure" class="required" placeholder="Departure" data-dateformat="m/d/y" />
																<i class="fa fa-calendar"></i>
															</span>
                                            </p>
                                            <p class="form-row">
															<span class="select-box input-left" title="Adults">
																<select name="adults" class="required" data-placeholder="Adults">
                                                                    <option />Adults
                                                                    <option value="1" />1
                                                                    <option value="2" />2
                                                                    <option value="3" />3
                                                                    <option value="4" />4
                                                                    <option value="5" />5
                                                                </select>
															</span>
                                            </p>
                                            <p class="form-row">
															<span class="select-box input-right" title="Children">
																<select name="children" class="required" data-placeholder="Children">
                                                                    <option />Children
                                                                    <option value="1" />1
                                                                    <option value="2" />2
                                                                    <option value="3" />3
                                                                    <option value="4" />4
                                                                    <option value="5" />5
                                                                </select>
															</span>
                                            </p>
                                            <p class="form-row">
															<span class="select-box input-right" title="Room">
																<select name="room" class="required">
                                                                    <option value="standard" />Standard Room ($37)
                                                                    <option value="appartment" />Appartment ($69)
                                                                </select>
															</span>
                                            </p>
                                            <p class="form-row">
                                                <button class="button submit-btn"><i class="fa fa-check"></i> Make Reservation</button>
                                            </p>
                                            </form>
                                        </div>
                                        <!-- BOOK FORM : end -->

                                    </div>
                                    <!-- PROPERTY PANEL : end -->

                                </div>
                            </div>

                        </div>
                        <!-- PROPERTY DETAILS : end -->

                    </div>
                    <div class="col-md-4 col-md-pull-8">

                        <!-- PROPERTY LOCATION DETAILS : begin -->
                        <aside class="property-location-details">
                            <h3 class="property-location-title">Details</h3>

                            <!-- PROPERTY INFO : begin -->
                            <div class="property-info">

                                <!-- ADDRESS : begin -->
                                <div class="toggle-container property-address">
                                    <h5 class="toggle-title">Address</h5>
                                    <div class="toggle-content">

                                        <p>Del Mar 110<br />
                                            82010 Mazatlán, Sinaloa,<br />
                                            Mexico</p>

                                    </div>
                                </div>
                                <!-- ADDRESS : end -->

                                <!-- ACCOMODATION : begin -->
                                <div class="toggle-container property-accomodation">
                                    <h5 class="toggle-title">Accomodation</h5>
                                    <div class="toggle-content">

                                        <ul class="custom-list">
                                            <li>Beds <strong>2</strong></li>
                                            <li>People allowed <strong>4</strong></li>
                                            <li>Bathrooms <strong>1</strong></li>
                                            <li>Year built <strong>2006</strong></li>
                                        </ul>

                                    </div>
                                </div>
                                <!-- ACCOMODATION : end -->

                                <!-- ADDITIONAL : begin -->
                                <div class="toggle-container property-additional">
                                    <h5 class="toggle-title">Additional Information</h5>
                                    <div class="toggle-content">

                                        <ul class="custom-list check-list">
                                            <li>Air Conditioning</li>
                                            <li>Garden</li>
                                            <li>Swimming Pool</li>
                                            <li>Sea View</li>
                                            <li>Pets Allowed</li>
                                            <li>Parking</li>
                                            <li>Internet Connection</li>
                                            <li>Radio/TV</li>
                                            <li>Separate Toilet</li>
                                            <li>Children Friendly</li>
                                        </ul>

                                    </div>
                                </div>
                                <!-- ADDITIONAL : end -->

                            </div>
                            <!-- PROPERTY INFO : end -->

                        </aside>
                        <!-- PROPERTY LOCATION DETAILS : end -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MAIN WRAPPER : end -->

    </div>
    <!-- CORE : end -->


<?php
    print_footer();
?>