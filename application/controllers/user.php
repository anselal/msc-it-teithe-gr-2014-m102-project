<?php
/**
 * Created by IntelliJ IDEA.
 * User: tasos
 * Date: 11/9/14
 * Time: 11:47 PM
 */

class User extends CI_Controller {

    function login() {
        $this->load->view('templates/header');
        $this->load->view('login');
        $this->load->view('templates/footer');
    }
} 