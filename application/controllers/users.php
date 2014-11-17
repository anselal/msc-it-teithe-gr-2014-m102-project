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
                $this->session->set_userdata('userType',$user['user_type']);
                redirect(base_url().'index.php/home');
            }
        }

        $this->load->view('templates/header');
        $this->load->view('login', $data);
        $this->load->view('templates/footer');
    }

    function logout() {
        $this->session->sess_destroy();
        redirect(base_url().'index.php/home');
    }
} 