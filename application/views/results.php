<?php
/**
 * Created by IntelliJ IDEA.
 * User: tasos
 * Date: 12/14/14
 * Time: 7:41 PM
 */

require_once('templates/header.php');
require_once('templates/navbar.php');
require_once('templates/footer.php');

$base_url = base_url();
print_header("Αποτελέσματα");
$sessionData[] = NULL;
if($this->session->userdata('userID')) {
    $sessionData['userID'] = $this->session->userdata('userID');
    $sessionData['username'] = $this->session->userdata('username');
    $sessionData['userType'] = $this->session->userdata('userType');
}
print_navbar($sessionData);
?>



    <!-- CORE : begin -->
    <div id="core" class="page-search-results">

    <!-- PAGE HEADER : begin -->
    <div class="page-header">
        <div class="container">
            <div class="page-header-inner clearfix">
                <h1>Αποτελέσματα</h1>
                <ul class="custom-list breadcrumbs">
                    <li><a href="<?php echo $base_url; ?>home">Αρχική</a> / </li>
                    <li><a href="<?php echo $base_url; ?>results">Αποτελέσματα</a></li>
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

        <!-- PROPERTIES LISTING : begin -->
        <div class="properties-listing">

            <!-- PROPERTIES LISTING HEADER : begin -->
            <div class="properties-listing-header clearfix">

                <!-- LIST LAYOUT : begin -->
                <div class="list-layout">
                    <button class="button" data-layout="grid"><i class="fa fa-th"></i></button>
                    <button class="button active" data-layout="list"><i class="fa fa-list-ul"></i></button>
                </div>
                <!-- LIST LAYOUT : end -->

            </div>
            <!-- PROPERTIES LISTING HEADER : end -->

            <!-- PROPERTY LIST : begin -->
            <ul class="custom-list clearfix property-list layout-list">

                <!-- PROPERTY 1 : begin -->
                <li class="property first-in-row odd">
                    <a href="#" class="property-thumb">
                        <img src="<?php echo $base_url; ?>assets/img/property_thumb_01.jpg" alt="" />
                        <span class="overlay"><span><i class="fa fa-search"></i> Περισσότερες πληροφορίες</span></span>
                    </a>
                    <div class="property-content">
                        <h4 class="property-title"><a href="<?php echo $base_url; ?>results/details">Ξενοδοχείο Α</a></h4>
                        <h5 class="property-location"> Θεσσαλονίκη, Ελλάδα</h5>
                        <p class="property-description">Το ξενοδοχείο βρίσκεται στο κέντρο της Θεσσαλονίκης. </p>
                        <ul class="custom-list property-icons">
                            <li class="beds" title="beds"><i></i>2</li>
                            <li class="people" title="people"><i></i>4</li>
                            <li class="bathrooms" title="bathrooms"><i></i>1</li>
                        </ul>
                        <div class="property-price-rating">
                            <div class="property-price"><strong>370 €</strong> / βραδιά</div>
                            <div class="property-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                        </div>
                    </div>
                </li>
                <!-- PROPERTY 1 : end -->

                <!-- PROPERTY 2 : begin -->
                <li class="property">
                    <a href="#" class="property-thumb">
                        <img src="<?php echo $base_url; ?>assets/img/property_thumb_02.jpg" alt="" />
                        <span class="overlay"><span><i class="fa fa-search"></i> Περισσότερες πληροφορίες</span></span>
                    </a>
                    <div class="property-content">
                        <h4 class="property-title"><a href="<?php echo $base_url; ?>results/details">Ξενοδοχείο B</a></h4>
                        <h5 class="property-location">Θεσσαλονίκη, Ελλάδα</h5>
                        <p class="property-description">Το ξενοδοχείο βρίσκεται στο κέντρο της Θεσσαλονίκης.</p>
                        <ul class="custom-list property-icons">
                            <li class="beds" title="beds"><i></i>2</li>
                            <li class="people" title="people"><i></i>4</li>
                            <li class="bathrooms" title="bathrooms"><i></i>1</li>
                        </ul>
                        <div class="property-price-rating">
                            <div class="property-price"><strong>37 €</strong> / βραδιά</div>
                            <div class="property-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                        </div>
                    </div>
                </li>
                <!-- PROPERTY 2 : end -->

                <!-- PROPERTY 3 : begin -->
                <li class="property odd">
                    <a href="#" class="property-thumb">
                        <img src="<?php echo $base_url; ?>assets/img/property_thumb_03.jpg" alt="" />
                        <span class="overlay"><span><i class="fa fa-search"></i> Περισσότερες πληροφορίες</span></span>
                    </a>
                    <div class="property-content">
                        <h4 class="property-title"><a href="<?php echo $base_url; ?>results/details">Ξενοδοχείο Γ </a></h4>
                        <h5 class="property-location">Θεσσαλονίκη, Ελλάδα</h5>
                        <p class="property-description">Το ξενοδοχείο βρίσκεται στο κέντρο της Θεσσαλονίκης.</p>
                        <ul class="custom-list property-icons">
                            <li class="beds" title="beds"><i></i>2</li>
                            <li class="people" title="people"><i></i>4</li>
                            <li class="bathrooms" title="bathrooms"><i></i>1</li>
                        </ul>
                        <div class="property-price-rating">
                            <div class="property-price"><strong>37 €</strong> / βραδιά</div>
                            <div class="property-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                        </div>
                    </div>
                </li>
                <!-- PROPERTY 3 : end -->

                <!-- PROPERTY 4 : begin -->
                <li class="property first-in-row">
                    <a href="#" class="property-thumb">
                        <img src="<?php echo $base_url; ?>assets/img/property_thumb_04.jpg" alt="" />
                        <span class="overlay"><span><i class="fa fa-search"></i> Περισσότερες πληροφορίες</span></span>
                    </a>
                    <div class="property-content">
                        <h4 class="property-title"><a href="<?php echo $base_url; ?>results/details">Ξενοδοχείο Δ</a></h4>
                        <h5 class="property-location">Θεσσαλονίκη, Ελλάδα</h5>
                        <p class="property-description">Το ξενοδοχείο βρίσκεται στο κέντρο της Θεσσαλονίκης.</p>
                        <ul class="custom-list property-icons">
                            <li class="beds" title="beds"><i></i>2</li>
                            <li class="people" title="people"><i></i>4</li>
                            <li class="bathrooms" title="bathrooms"><i></i>1</li>
                        </ul>
                        <div class="property-price-rating">
                            <div class="property-price"><strong>37 €</strong> / βραδιά</div>
                            <div class="property-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                        </div>
                    </div>
                </li>
                <!-- PROPERTY 4 : end -->

                <!-- PROPERTY 5 : begin -->
                <li class="property odd">
                    <a href="#" class="property-thumb">
                        <img src="<?php echo $base_url; ?>assets/img/property_thumb_05.jpg" alt="" />
                        <span class="overlay"><span><i class="fa fa-search"></i> Περισσότερες πληροφορίες</span></span>
                    </a>
                    <div class="property-content">
                        <h4 class="property-title"><a href="<?php echo $base_url; ?>results/details">Ξενοδοχείο E</a></h4>
                        <h5 class="property-location">Θεσσαλονίκη, Ελλάδα</h5>
                        <p class="property-description">Το ξενοδοχείο βρίσκεται στο κέντρο της Θεσσαλονίκης.</p>
                        <ul class="custom-list property-icons">
                            <li class="beds" title="beds"><i></i>2</li>
                            <li class="people" title="people"><i></i>4</li>
                            <li class="bathrooms" title="bathrooms"><i></i>1</li>
                        </ul>
                        <div class="property-price-rating">
                            <div class="property-price"><strong>37 €</strong> / βραδιά</div>
                            <div class="property-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                        </div>
                    </div>
                </li>
                <!-- PROPERTY 5 : end -->

                <!-- PROPERTY 6 : begin -->
                <li class="property">
                    <a href="#" class="property-thumb">
                        <img src="<?php echo $base_url; ?>assets/img/property_thumb_06.jpg" alt="" />
                        <span class="overlay"><span><i class="fa fa-search"></i> Περισσότερες πληροφορίες</span></span>
                    </a>
                    <div class="property-content">
                        <h4 class="property-title"><a href="<?php echo $base_url; ?>results/details">Ξενοδοχείο ΣΤ</a></h4>
                        <h5 class="property-location">Θεσσαλονίκη, Ελλάδα</h5>
                        <p class="property-description">Το ξενοδοχείο βρίσκεται στο κέντρο της Θεσσαλονίκης.</p>
                        <ul class="custom-list property-icons">
                            <li class="beds" title="beds"><i></i>2</li>
                            <li class="people" title="people"><i></i>4</li>
                            <li class="bathrooms" title="bathrooms"><i></i>1</li>
                        </ul>
                        <div class="property-price-rating">
                            <div class="property-price"><strong>37 €</strong> / βραδιά</div>
                            <div class="property-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                        </div>
                    </div>
                </li>
                <!-- PROPERTY 6 : end -->

            </ul>
            <!-- PROPERTY LIST : end -->

            <!-- PROPERTIES LISTING FOOTER : begin -->
            <div class="properties-listing-footer clearfix">
                <div class="default-form">
											<span class="select-box links">
												<select name="listing-pagination">
                                                    <option value="results?page=1" />Σελίδα 1
                                                    <option value="results?page=2" />Σελίδα 2
                                                    <option value="results?page=3" />Σελίδα 3
                                                    <option value="results?page=4" />Σελίδα 4
                                                    <option value="results?page=5" />Σελίδα 5
                                                    <option value="results?page=6" />Σελίδα 6
                                                    <option value="results?page=7" />Σελίδα 7
                                                    <option value="results?page=8" />Σελίδα 8
                                                    <option value="results?page=9" />Σελίδα 9
                                                    <option value="results?page=10" />Σελίδα 10
                                                </select>
											</span>
                </div>
            </div>
            <!-- PROPERTIES LISTING FOOTER : end -->

        </div>
        <!-- PROPERTIES LISTING : end -->

    </div>
    <div class="col-md-4 col-md-pull-8">

    <!-- PROPERTIES SEARCH : begin -->
    <aside class="properties-search">
    <h3 class="properties-search-title">Αναζήτηση &amp; φίλτρα</h3>

    <!-- PROPERTIES SEARCH BASIC : begin -->
    <div class="properties-search-basic">

        <!-- FORM BOOK : begin -->
        <form class="default-form" action="results" id="properties-search-form-book" />

        <!-- SEARCH INPUT : begin -->
        <p class="search-input">
            <input type="text" name="city" value="<?php if($this->input->get_post('city',TRUE)) { echo $this->input->get_post('city',TRUE); }  ?>" placeholder="Που θα ήθελες να κάνεις κράτηση;" />
        </p>
        <!-- SEARCH INPUT : end -->

        <!-- ARRIVAL DATE, DEPARTURE DATE : begin -->
        <p class="form-row clearfix">
												<span class="calendar-input input-left" title="Άφιξη">
													<input type="text" value="<?php if($this->input->get_post('arrival',TRUE)) { echo $this->input->get_post('arrival',TRUE); }  ?>" name="arrival" placeholder="Άφιξη" data-dateformat="m/d/y" />
													<i class="fa fa-calendar"></i>
												</span>
												<span class="calendar-input input-right" title="Αναχώρηση">
													<input type="text" value="<?php if($this->input->get_post('departure',TRUE)) { echo $this->input->get_post('departure',TRUE); }  ?>" name="departure" placeholder="Αναχώρηση" data-dateformat="m/d/y" />
													<i class="fa fa-calendar"></i>
												</span>
        </p>
        <!-- ARRIVAL DATE, DEPARTURE DATE : end -->

        <!-- NUMBER OF ADULTS AN CHILDREN : begin -->
        <p class="form-row clearfix">
												<span class="select-box input-left" title="Ενήλικες">
													<select name="adults" data-placeholder="Ενήλικες">
                                                        <option />Ενήλικες
                                                        <option value="1" />1
                                                        <option value="2" />2
                                                        <option value="3" />3
                                                        <option value="4" />4
                                                        <option value="5" />5
                                                    </select>
												</span>
												<span class="select-box input-right" title="Παιδιά">
													<select name="children" data-placeholder="Παιδιά>
                                                        <option />Children
                                                        <option value="1" />1
                                                        <option value="2" />2
                                                        <option value="3" />3
                                                        <option value="4" />4
                                                        <option value="5" />5
                                                    </select>
												</span>
        </p>
        <!-- NUMBER OF ADULTS AN CHILDREN : end -->

        <p class="form-row">
            <button class="button submit-btn"><i class="fa fa-search"></i> Αναζήτηση</button>
        </p>

        </form>
        <!-- FORM BOOK : begin -->

    </div>
    <!-- PROPERTIES SEARCH BASIC : end -->

    <hr class="form-divider" />

    <!-- PROPERTIES SEARCH FILTER : begin -->
    <div class="properties-search-filter">
        <form class="default-form" action="index.html" />

        <h4 class="filter-title">Αποτελέσματα φίλτρων</h4>

        <!-- PRICE FILTER : begin -->
        <div class="price-filter toggle-container">
            <h5 class="toggle-title">Σχετικά με την τιμή</h5>
            <div class="toggle-content">

                <div class="slider-range-container">
                    <div class="slider-range" data-min="100" data-max="2000" data-step="100" data-default-min="100" data-default-max="500" data-currency="€"></div>
                    <div class="clearfix">
                        <input type="text" class="range-from" value="10 €"  />
                        <input type="text" class="range-to" value="500 €" />
                    </div>
                </div>

            </div>
        </div>
        <!-- PRICE FILTER : end -->

        <!-- RATING FILTER : begin -->
        <div class="rating-filter toggle-container">
            <h5 class="toggle-title">Σχετικά με τα αστέρια</h5>
            <div class="toggle-content">

                <ul class="custom-list rating-filter-list">
                    <li>
															<span class="checkbox-input">
																<input type="checkbox" id="rating-filter-5star" checked="checked" />
																<label for="rating-filter-5star">
                                                                    <span class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                                                    <span class="label">5 αστέρια</span>
                                                                </label>
															</span>
                    </li>
                    <li>
															<span class="checkbox-input">
																<input type="checkbox" id="rating-filter-4star" />
																<label for="rating-filter-4star">
                                                                    <span class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
                                                                    <span class="label">4 αστέρια</span>
                                                                </label>
															</span>
                    </li>
                    <li>
															<span class="checkbox-input">
																<input type="checkbox" id="rating-filter-3star" />
																<label for="rating-filter-3star">
                                                                    <span class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span>
                                                                    <span class="label">3 αστέρια</span>
                                                                </label>
															</span>
                    </li>
                    <li>
															<span class="checkbox-input">
																<input type="checkbox" id="rating-filter-2star" />
																<label for="rating-filter-2star">
                                                                    <span class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span>
                                                                    <span class="label">2 αστέρια</span>
                                                                </label>
															</span>
                    </li>
                    <li>
															<span class="checkbox-input">
																<input type="checkbox" id="rating-filter-1star" />
																<label for="rating-filter-1star">
                                                                    <span class="stars"><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span>
                                                                    <span class="label">1 αστέρι</span>
                                                                </label>
															</span>
                    </li>
                </ul>

            </div>
        </div>
        <!-- RATING FILTER : end -->

        <!-- ADDITIONAL FILTER : begin -->
        <div class="additional-filter toggle-container">
            <h5 class="toggle-title">Πρόσθετες παροχές </h5>
            <div class="toggle-content">

                <ul class="custom-list additional-filter-list">
                    <li>
															<span class="checkbox-input">
																<input type="checkbox" id="additional-filter-air-conditioning" />
																<label for="additional-filter-air-conditioning">Κλιματισμός</label>
															</span>
                    </li>
                    <li>
															<span class="checkbox-input">
																<input type="checkbox" id="additional-filter-garden" />
																<label for="additional-filter-garden">Κήπος</label>
															</span>
                    </li>
                    <li>
															<span class="checkbox-input">
																<input type="checkbox" id="additional-filter-swimming-pool" />
																<label for="additional-filter-swimming-pool">Πισίνα</label>
															</span>
                    </li>
                    <li>
															<span class="checkbox-input">
																<input type="checkbox" id="additional-filter-sea-view" />
																<label for="additional-filter-sea-view">Θέα στη θάλασσα</label>
															</span>
                    </li>
                    <li>
															<span class="checkbox-input">
																<input type="checkbox" id="additional-filter-pets-allowed" />
																<label for="additional-filter-pets-allowed">Επιτρέπονται κατοικίδια</label>
															</span>
                    </li>
                    <li>
															<span class="checkbox-input">
																<input type="checkbox" id="additional-filter-parking" />
																<label for="additional-filter-parking">Θέσεις στάθμευσης</label>
															</span>
                    </li>
                    <li>
															<span class="checkbox-input">
																<input type="checkbox" id="additional-filter-internet-connection" />
																<label for="additional-filter-internet-connection">Internet </label>
															</span>
                    </li>
                    <li>
															<span class="checkbox-input">
																<input type="checkbox" id="additional-filter-radio-tv" />
																<label for="additional-filter-radio-tv">Τηλεόραση</label>
															</span>
                    </li>
                    <li>
															<span class="checkbox-input">
																<input type="checkbox" id="additional-filter-separate-toilet" />
																<label for="additional-filter-separate-toilet">Ξεχωριστή τουαλέτα</label>
															</span>
                    </li>
                    <li>
															<span class="checkbox-input">
																<input type="checkbox" id="additional-filter-children-friendly" />
																<label for="additional-filter-children-friendly">Φιλικό προς τα παιδιά</label>
															</span>
                    </li>
                </ul>

            </div>
        </div>
        <!-- ADDITIONAL FILTER : end -->

        </form>
    </div>
    <!-- PROPERTIES SEARCH FILTER : end -->

    </aside>
    <!-- PROPERTIES SEARCH : end -->

    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- MAIN WRAPPER : end -->

    </div>
    <!-- CORE : end -->

<?php print_footer(); ?>