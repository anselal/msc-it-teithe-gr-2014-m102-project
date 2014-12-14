<?php
/**
 * Created by IntelliJ IDEA.
 * User: tasos
 * Date: 11/9/14
 * Time: 10:14 PM
 */

class Home extends CI_Controller {
    function index() {
        $this->load->helper('html');
        $this->load->model('home_model');
        $data['posts'] = $this->home_model->getPosts();
        $css['datepicker'] = 'https://eternicode.github.io/bootstrap-datepicker/bootstrap-datepicker/css/datepicker3.css' ;
        $data['css'] = $css;
        $javascripts['datepicker'] = 'https://eternicode.github.io/bootstrap-datepicker/bootstrap-datepicker/js/bootstrap-datepicker.js' ;
        $data['javascripts'] = $javascripts;
        $this->load->view('templates/header', $data);
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }
} 