<?php
/**
 * Created by IntelliJ IDEA.
 * User: tasos
 * Date: 12/14/14
 * Time: 7:32 PM
 */

class Results extends CI_Controller {

    function index() {
        $this->load->view("results");
    }

    function details() {
        $this->load->view("results_details");
    }
} 