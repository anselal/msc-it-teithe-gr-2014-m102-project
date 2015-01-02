<?php
/**
 * Created by IntelliJ IDEA.
 * User: tasos
 * Date: 12/15/14
 * Time: 3:01 PM
 */

class Admin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->library('grocery_CRUD');
    }

    function index() {
        if($this->session->userdata('userType')!='admin') { // if the usertype is not admin
            redirect(base_url()); // redirect him to the home page
        }
        else {
            $this->load->view('admin/dashboard', (object)array('output' => '', 'js_files' => array(), 'css_files' => array()));
        }
    }

    public function hotels() {
        if($this->session->userdata('userType')!='admin') { // if the usertype is not admin
            redirect(base_url()); // redirect him to the home page
        }
        else {
            $crud = new grocery_CRUD();

            //$crud->set_theme('datatables');
            $crud->set_table('hotel');
            $crud->set_subject('Hotels');

            $output = $crud->render();

            $this->load->view('admin/dashboard',$output);
        }
    }

    public function rooms() {
        if($this->session->userdata('userType')!='admin') { // if the usertype is not admin
            redirect(base_url()); // redirect him to the home page
        }
        else {
            $crud = new grocery_CRUD();

            //$crud->set_theme('datatables');
            $crud->set_table('room');
            $crud->set_subject('Rooms');

            $crud->set_relation('hotelcode','hotel', 'name');
            $crud->set_relation('roomtype','roomtype','description');
            $output = $crud->render();

            $this->load->view('admin/dashboard',$output);
        }
    }

    public function reservations() {
        if($this->session->userdata('userType')!='admin') { // if the usertype is not admin
            redirect(base_url()); // redirect him to the home page
        }
        else {
            $crud = new grocery_CRUD();

            //$crud->set_theme('datatables');
            $crud->set_table('reservation');
            $crud->set_subject('Reservations');

            $output = $crud->render();

            $this->load->view('admin/dashboard',$output);
        }
    }

    public function users() {
        if($this->session->userdata('userType')!='admin') { // if the usertype is not admin
            redirect(base_url()); // redirect him to the home page
        }
        else {
            $crud = new grocery_CRUD();

            //$crud->set_theme('datatables');
            $crud->set_table('user');
            $crud->set_subject('Users');
            $crud->columns('name', 'email', 'user_type', 'country', 'remark');

            $output = $crud->render();

            $this->load->view('admin/dashboard',$output);
        }
    }
    function sessions() {
        if($this->session->userdata('userType')!='admin') { // if the usertype is not admin
            redirect(base_url()); // redirect him to the home page
        }
        else {
            $crud = new grocery_CRUD();

            //$crud->set_theme('datatables');
            $crud->set_table('ci_sessions');
            $crud->set_subject('Sessions');
            $crud->columns('session_id', 'ip_address', 'user_agent', 'last_activity');

            $output = $crud->render();

            $this->load->view('admin/dashboard',$output);
        }
    }

} 