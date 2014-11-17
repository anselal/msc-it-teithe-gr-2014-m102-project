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

    function index() {
        $this->load->library('email');

        $this->email->set_newline("\r\n");

        $this->email->from('m102@anastasios-selalmazidis.com', 'm102-project (c)2014');
        $this->email->to('t.selalmasidis@gmail.com');
        $this->email->subject('This is an email test');
        $this->email->message('It is working. Great!');

        $file = "/home/tasos/public_html/m102/license.txt" ;

        $this->email->attach($file);

        if($this->email->send()) { // send() will return 1 if succesfull
            echo 'Your email was sent, fool.';
        }
        else {
            show_error($this->email->print_debugger());
        }


    }
} 