<?php
/**
 * Created by IntelliJ IDEA.
 * User: tasos
 * Date: 11/9/14
 * Time: 10:14 PM
 */

class Home extends CI_Controller {

    function index() {
        $this->load->view("home");
    }

    function about() {
        $this->load->view("about");
    }

    function contact() {
        $this->load->view("contact");
    }

    function privacypolicy() {
        $this->load->view("privacypolicy");
    }

    function termsconditions() {
        $this->load->view("termsconditions");
    }
} 