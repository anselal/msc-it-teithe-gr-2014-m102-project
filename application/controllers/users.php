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
            } else {
                $this->session->set_userdata('userID',$user['Code']);
                $this->session->set_userdata('userType',$user['user_type']);
                $this->session->set_userdata('username',$user['username']);
                redirect(base_url());
            }
        }

        $this->load->view('templates/header');
        $this->load->view('login', $data);
        $this->load->view('templates/footer');
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
} 