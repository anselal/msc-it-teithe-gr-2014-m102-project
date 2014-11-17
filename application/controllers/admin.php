<?php
/**
 * Created by IntelliJ IDEA.
 * User: tasos
 * Date: 11/17/14
 * Time: 5:37 PM
 */

class admin extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {

        $this->load->view('admin/admin');

    }
} 