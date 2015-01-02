<?php
/**
 * Created by IntelliJ IDEA.
 * User: tasos
 * Date: 11/11/14
 * Time: 7:09 PM
 */

class Email extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function _index() {
        $this->load->library('email');

        $this->email->set_newline("\r\n");

        $this->email->from('m102@anastasios-selalmazidis.com', 'm102-project (c)2014');
        $this->email->to('t.selalmasidis@gmail.com');
        $this->email->subject('This is an email test');
        $this->email->message('It is working. Great!');

        //$file = "/home/tasos/public_html/m102/license.txt" ;

        //$this->email->attach($file);

        if($this->email->send()) { // send() will return 1 if succesfull
            echo 'Your email was sent, fool.';
        }
        else {
            show_error($this->email->print_debugger());
        }
    }

    function contact_email() {
        $this->load->library('email');

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

            $this->form_validation->set_rules('field_name', 'Username', 'required');
            $this->form_validation->set_rules('field_email', 'Email', 'required');
            $this->form_validation->set_rules('field_phone', 'Phone', 'required');
            $this->form_validation->set_rules('field_subject', 'Subject', 'required');
            $this->form_validation->set_rules('field_message', 'Message', 'required');

            if ($this->form_validation->run() == FALSE)
            {
                show_error($this->email->print_debugger());
            }
            else
            {
                $this->email->set_newline("\r\n");

                $name=$this->input->post('field_name',true);
                $email=$this->input->post('field_email',true);
                $phone=$this->input->post('field_phone',true);
                $subject=$this->input->post('field_subject',true);
                $message=$this->input->post('field_message',true);
                $message .= "\nPhone Number: " . $phone;

                $this->email->from($email, $name);
                $this->email->to('t.selalmasidis@gmail.com');
                $this->email->subject($subject);
                $this->email->message($message);

                if($this->email->send()) {
                    echo 'Your email was sent.';
                }
                else {
                    show_error($this->email->print_debugger());
                }
            }
    }
} 