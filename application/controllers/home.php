<?php
/**
 * Created by IntelliJ IDEA.
 * User: tasos
 * Date: 11/9/14
 * Time: 10:14 PM
 */

class Home extends CI_Controller {
    function index() {
        $this->load->model('home_model');
        $data['posts'] = $this->home_model->getPosts();
        $this->load->view('templates/header');
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }
} 