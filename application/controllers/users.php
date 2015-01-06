<?php
/**
 * Created by IntelliJ IDEA.
 * User: tasos
 * Date: 11/9/14
 * Time: 11:47 PM
 */

class Users extends CI_Controller {

    function login() {

        $data['error']=0;
        if($_POST) {
            $this->load->model('user');
            $username=$this->input->post('username',true);
            $password=$this->input->post('password',true);
            $user=$this->user->login($username,$password);
            if(!$user) {
                $data['error']=1;
                redirect(base_url());
            } else {
                $this->session->set_userdata('userID',$user['Code']);
                $this->session->set_userdata('userType',$user['user_type']);
                $this->session->set_userdata('username',$user['username']);
                redirect(base_url());
            }
        }

        //$this->load->view('templates/header');
        //$this->load->view('login', $data);
        //$this->load->view('templates/footer');
    }

    function logout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    function admin($v = 'dashboard') {
        if($this->session->userdata('userType')!='admin') { // if the usertype is not admin
            redirect(base_url()); // redirect him to the home page
        } else { // else continue and show the admin panel
            switch($v) {
                case 'index':
                    $this->load->view('admin/index');
                    break;
                case 'hotels':
                    $this->load->view('admin/hotels_view');
                    break;
                case 'rooms':
                    $this->load->view('admin/rooms_view');
                    break;
                case 'roomtypes':
                    $this->load->view('admin/roomtypes_view');
                    break;
                case 'reservations':
                    $this->load->view('admin/reservations_view');
                    break;
                case 'users':
                    $this->load->view('admin/users_view');
                    break;
                default:
                    $this->load->view('admin/dashboard');
                    break;
            }

        }

    }

    function register() {

        $this->load->helper('form');

        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[4]|max_length[25]|xss_clean');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[25]|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[r_password]|min_length[4]|max_length[25]');
        $this->form_validation->set_rules('r_password', 'Password Confirmation', 'required|min_length[4]|max_length[25]');

        if ($this->form_validation->run()) {
            $this->load->model('user');
            $userdata['username']=$this->input->post('username');
            $userdata['password']=sha1($this->input->post('password'));
            $userdata['email']=$this->input->post('email');
            $userdata['name']=$this->input->post('name');
            // TO-DO check if user exists before insert
            $db_user=$this->user->check_for_username($userdata['username']);
            $db_email=$this->user->check_for_email($userdata['email']);
            if($db_user) {
                $data['user_exists'] = "Please use another username";
                $this->load->view("register", $data);
                return;
            }
            if($db_email) {
                $data['email_exists'] = "Please use another email";
                $this->load->view("register", $data);
                return;
            }
            // insert user to database
            $registeredUser=$this->user->create_user($userdata);

            // TO-DO
            // check $registeredUser

            // TO-DO
            // send email after register

            // print message after insert
            $data['registered_successful'] = "Your registration is complete. Your username is " . $this->input->post('username');
            $this->load->view("register", $data);
        }
        else {
            $this->load->view("register");
        }
    }
} 