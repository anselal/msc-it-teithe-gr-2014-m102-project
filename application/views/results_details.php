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

print_header("Αποτελέσματα - Λεπτομέρειες");
$sessionData[] = NULL;
if($this->session->userdata('userID')) {
    $sessionData['userID'] = $this->session->userdata('userID');
    $sessionData['username'] = $this->session->userdata('username');
    $sessionData['userType'] = $this->session->userdata('userType');
}
print_navbar($sessionData);
?>


    <!-- CORE : begin -->
    <div id="core" class="page-property-details">

    <!-- PAGE HEADER : begin -->
    <div class="page-header">
        <div class="container">
            <div class="page-header-inner clearfix">
                <h1>Αποτελέσματα - Λεπτομέρειες</h1>
                <ul class="custom-list breadcrumbs">
                    <li><a href="<?php echo $base_url; ?>home">Αρχική</a> / </li>
                    <li><a href="<?php echo $base_url; ?>results">Αποτελέσματα</a> /</li>
                    <li><a href="<?php echo $base_url; ?>results/details">Αποτελέσματα - Λεπτομέρειες</a></li>
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
                            <h4>Περιγραφή</h4>
                            <p>Καλώς ορίσατε στο πιο ολοκληρωμένο συνεδριακό ξενοδοχείο στην Θεσσαλονίκη.</p>
                            <p>Με το μοναδικό του σχεδιασμό, συνδυάζει αρμονικά τις εξαιρετικά σύγχρονες εγκαταστάσεις με την κομψότητα και την πολυτέλεια του νεοκλασικού κτιρίου δημιουργώντας μια μοναδική κοσμοπολίτικη ατμόσφαιρα.</p>
                            <p>Τα 261 Δωμάτια και οι 15 αίθουσες εξοπλισμένα με την τελευταία λέξη της τεχνολογίας καλύπτουν και τις πιο σύνθετες ανάγκες.</p>
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
                            <h4 class="panel-item-title">Τιμή</h4>
                            <p class="price">από <strong>40€</strong>/ βραδιά</p>
                        </div>
                        <!-- OBJECT PRICE : end -->

                        <!-- OBJECT RATING : begin -->
                        <div class="panel-item object-rating">
                            <h4 class="panel-item-title">Αξιολόγηση</h4>
                            <p class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></p>
                        </div>
                        <!-- OBJECT RATING : end -->

                        <!-- BOOK FORM : begin -->
                        <div class="panel-item book-form">
                            <h4 class="panel-item-title">Κάντε την κράτηση</h4>
                            <form class="default-form" action="<?php echo $base_url; ?>results/details" />
                            <p class="alert-message warning validation" style="display: none;"><i class="ico fa fa-exclamation-circle"></i> Παρακαλώ, συμπληρώστε όλα τα πεδία!</p>
                            <p class="form-row">
															<span class="calendar-input input-left" title="Άφιξη">
																<input type="text" name="arrival" class="required" placeholder="Άφιξη" data-dateformat="m/d/y" />
																<i class="fa fa-calendar"></i>
															</span>
                            </p>
                            <p class="form-row">
															<span class="calendar-input input-left" title="Αναχώρηση">
																<input type="text" name="departure" class="required" placeholder="Αναχώρηση" data-dateformat="m/d/y" />
																<i class="fa fa-calendar"></i>
															</span>
                            </p>
                            <p class="form-row">
															<span class="select-box input-left" title="Ενήλικες">
																<select name="adults" class="required" data-placeholder="Ενήλικες">
                                                                    <option />Ενήλικες
                                                                    <option value="1" />1
                                                                    <option value="2" />2
                                                                    <option value="3" />3
                                                                    <option value="4" />4
                                                                    <option value="5" />5
                                                                </select>
															</span>
                            </p>
                            <p class="form-row">
															<span class="select-box input-right" title="Παιδιά">
																<select name="children" class="required" data-placeholder="Παιδιά">
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
															<span class="select-box input-right" title="Τύπος δωματίου">
																<select name="room" class="required">
                                                                    <option />Tύπος δωματίου
                                                                    <option value="standard" />Δίκλινο
                                                                    <option value="triklino" />Τρίκλινο
                                                                    <option value="appartment" />Διαμέρισμα
                                                                </select>
															</span>
                            </p>
                            <p class="form-row">
															<span class="select-box input-right" title="Πρωινό">
																<select name="room" class="required">
                                                                    <option />Πρωινό
                                                                    <option value="yes" />Ναι
                                                                    <option value="no" />Όχι

                                                                </select>
															</span>
                            </p>
                            <p class="form-row">
                                <button class="button submit-btn"><i class="fa fa-check"></i> Κάντε την κράτηση</button>
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
            <h3 class="property-location-title">Λεπτομέρειες</h3>

            <!-- PROPERTY INFO : begin -->
            <div class="property-info">

                <!-- ADDRESS : begin -->
                <div class="toggle-container property-address">
                    <h5 class="toggle-title">Διεύθυνση</h5>
                    <div class="toggle-content">

                        <p>Εγνατίας 1<br />
                            54331 Θεσσαλονίκη,<br />
                            Ελλάδα</p>

                    </div>
                </div>
                <!-- ADDRESS : end -->

                <!-- ACCOMODATION : begin -->
                <div class="toggle-container property-accomodation">
                    <h5 class="toggle-title">Διαμονή</h5>
                    <div class="toggle-content">

                        <ul class="custom-list">
                            <li>Κλίνες<strong>2</strong></li>
                            <li>Επιτρεπτά άτομα<strong>4</strong></li>
                            <li>Λουτροκαμπινές<strong>1</strong></li>
                            <li>Έτος ανοικοδόμησης<strong>2006</strong></li>
                        </ul>

                    </div>
                </div>
                <!-- ACCOMODATION : end -->

                <!-- ADDITIONAL : begin -->
                <div class="toggle-container property-additional">
                    <h5 class="toggle-title">Πρόσθετες παροχές </h5>
                    <div class="toggle-content">

                        <ul class="custom-list check-list">
                            <li>Κλιματισμός</li>
                            <li>Κήπος</li>
                            <li>Πισίνα</li>
                            <li>Θέα στη θάλασσα</li>
                            <li>Επιτρέπονται κατοικίδια</li>
                            <li>Θέσεις στάθμευσης</li>
                            <li>Internet </li>
                            <li>Τηλεόραση</li>
                            <li>Ξεχωριστή τουαλέτα</li>
                            <li>Φιλικό προς τα παιδιά</li>
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