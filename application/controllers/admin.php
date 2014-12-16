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
        $this->load->view('admin/dash',(object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
    }

    public function hotels() {
        $crud = new grocery_CRUD();

        //$crud->set_theme('datatables');
        $crud->set_table('hotel');
        $crud->set_subject('Hotels');

        $output = $crud->render();

        $this->load->view('admin/dashboard',$output);
    }

    public function rooms() {
        $crud = new grocery_CRUD();

        //$crud->set_theme('datatables');
        $crud->set_table('room');
        $crud->set_subject('Rooms');

        $crud->set_relation('hotelcode','hotel', 'name');
        $crud->set_relation('roomtype','roomtype','description');
        $output = $crud->render();

        $this->load->view('admin/dashboard',$output);
    }

    public function reservations() {
        $crud = new grocery_CRUD();

        //$crud->set_theme('datatables');
        $crud->set_table('reservation');
        $crud->set_subject('Reservations');


        $output = $crud->render();

        $this->load->view('admin/dashboard',$output);
    }

    public function users() {
        $crud = new grocery_CRUD();

        //$crud->set_theme('datatables');
        $crud->set_table('user');
        $crud->set_subject('Users');
        $crud->columns('name', 'email', 'user_type', 'country', 'remark');

        $output = $crud->render();

        $this->load->view('admin/dashboard',$output);
    }

} 