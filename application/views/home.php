<?php
/**
 * Created by IntelliJ IDEA.
 * User: tasos
 * Date: 11/3/14
 * Time: 95: PM
 */

require_once('templates/header.php');
require_once('templates/navbar.php');
require_once('templates/footer.php');

$base_url = base_url();

print_header("Home");
$sessionData[] = NULL;
if($this->session->userdata('userID')) {
    $sessionData['userID'] = $this->session->userdata('userID');
    $sessionData['username'] = $this->session->userdata('username');
    $sessionData['userType'] = $this->session->userdata('userType');
}
print_navbar($sessionData);
?>

<!-- BANNER : begin -->
<div id="banner">

    <!-- BANNER BG : begin -->
    <div class="banner-bg">
        <div class="banner-bg-item"><img src="<?php echo $base_url; ?>assets/img/banner_bg_01.jpg" alt="" /></div>
        <div class="banner-bg-item"><img src="assets/img/banner_bg_02.jpg" alt="" /></div>
        <div class="banner-bg-item"><img src="assets/img/banner_bg_03.jpg" alt="" /></div>
    </div>
    <!-- BANNER BG : end -->

    <!-- BANNER SEARCH : begin -->
    <div class="banner-search">
        <div class="container">
            <div class="banner-search-inner">
                <ul class="custom-list tab-title-list clearfix">
                    <li class="tab-title active"><a href="#book">Book</a></li>
                </ul>
                <ul class="custom-list tab-content-list">

                    <!-- BOOK : begin -->
                    <li class="tab-content active">
                        <form class="default-form" action="results" />

                        <!-- SEARCH INPUT : begin -->
									<span class="search-input">
										<input type="text" placeholder="Where do you want to book?" />
									</span>
                        <!-- SEARCH INPUT : end -->

                        <!-- ARRIVAL DATE : begin -->
									<span class="calendar-input input-left" title="Arrival">
										<input type="text" name="arrival" placeholder="Arrival" data-dateformat="m/d/y" />
										<i class="fa fa-calendar"></i>
									</span>
                        <!-- ARRIVAL DATE : end -->

                        <!-- DEPARTURE DATE : begin -->
									<span class="calendar-input input-right" title="Departure">
										<input type="text" name="departure" placeholder="Departure" data-dateformat="m/d/y" />
										<i class="fa fa-calendar"></i>
									</span>
                        <!-- DEPARTURE DATE : end -->

                        <!-- ADULTS : begin -->
									<span class="select-box" title="Adults">
										<select name="adults" data-placeholder="Adults">
                                            <option />Adults
                                            <option value="1" />1
                                            <option value="2" />2
                                            <option value="3" />3
                                            <option value="4" />4
                                            <option value="5" />5
                                        </select>
									</span>
                        <!-- ADULTS : end -->

                        <!-- CHILDREN : begin -->
									<span class="select-box" title="Children">
										<select name="children" data-placeholder="Children">
                                            <option />Children
                                            <option value="1" />1
                                            <option value="2" />2
                                            <option value="3" />3
                                            <option value="4" />4
                                            <option value="5" />5
                                        </select>
									</span>
                        <!-- CHILDREN : end -->

                        <!-- SUBMIT : begin -->
									<span class="submit-btn">
										<button class="button"><i class="fa fa-search"></i> Search</button>
									</span>
                        <!-- SUBMIT : end -->

                        </form>
                    </li>
                    <!-- BOOK : end -->

                </ul>
            </div>
        </div>
    </div>
    <!-- BANNER SEARCH : end -->

</div>
<!-- BANNER : end -->

<?php print_footer(); ?>