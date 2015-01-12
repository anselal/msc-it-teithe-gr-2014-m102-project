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

        $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[4]|max_length[25]|xss_clean|encode_php_tags');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[25]|xss_clean|encode_php_tags');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean|encode_php_tags');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[r_password]|min_length[4]|max_length[25]|xss_clean|encode_php_tags');
        $this->form_validation->set_rules('r_password', 'Password Confirmation', 'required|min_length[4]|max_length[25]|xss_clean|encode_php_tags');
        // set custom error messages
        $this->form_validation->set_message('required', 'Το πεδίο %s είναι υποχρεωτικό');

        if ($this->form_validation->run()==FALSE) {
            $this->load->view("register");
        }
        else if ($this->form_validation->run()) {
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

            // send email after register
            $new_user = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
            );
            $this->_new_user_email($new_user);

            // print message after insert
            $data['registered_successful'] = 'Η εγγραφή σας ολοκληρώθηκε με επιτυχία. Τα στοιχεία του λογαριασμού σας στάλθηκαν στη διεύθυνση ' . $this->input->post('email');
            $this->load->view("register", $data);
        }
    }

    function _new_user_email($new_user_data) {
        $this->load->library('email');
        $this->email->set_newline("\r\n");

        $message = "Ακολουθούν τα στοιχεία του λογαριασμού σας:\n\n" .
            "Στοιχεία χρήστη:" .
            "\nΌνομα χρήστη: " . $new_user_data["username"] .
            "\nEmail: " . $new_user_data["email"] .
            "\nΣυνθηματικό:" . $new_user_data["password"] .
            "\n\nΕυχαριστούμε που μας προτιμήσατε.";

        $this->email->from('project-casa@msc.ateithe.com');
        $this->email->bcc('t.selalmasidis@gmail.com');
        $this->email->to($new_user_data['email']);
        $this->email->subject('Καλώς ήλθατε στο Casa');
        $this->email->message($message);

        $this->email->send();
    }

    function contact_email() {
        $this->load->library('email');

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('field_name', 'Username', 'required|xss_clean|encode_php_tags');
        $this->form_validation->set_rules('field_email', 'Email', 'trim|required|valid_email|xss_clean|encode_php_tags');
        $this->form_validation->set_rules('field_phone', 'Phone', 'required|xss_clean|encode_php_tags|numeric');
        $this->form_validation->set_rules('field_subject', 'Subject', 'required|xss_clean|encode_php_tags');
        $this->form_validation->set_rules('field_message', 'Message', 'required|xss_clean|encode_php_tags');

        if ($this->form_validation->run() == FALSE)
        {
            //show_error($this->email->print_debugger());
            $this->load->view("contact");
        }
        else if ($this->form_validation->run())
        {
            $this->email->set_newline("\r\n");

            $name=$this->input->post('field_name',true);
            $email=$this->input->post('field_email',true);
            $phone=$this->input->post('field_phone',true);
            $subject=$this->input->post('field_subject',true);
            $message = "Μήνυμα από τον χρήστη\n\n" . $this->input->post("field_message",true) .
                        "\n\nΣτοιχεία χρήστη:" .
                        "\nΌνομα: " . $name .
                        "\nEmail: " . $email .
                        "\nΤηλέφωνο επικοινωνίας: " . $phone;

            $this->email->from('project-casa@msc.ateithe.com');
            $this->email->to('t.selalmasidis@gmail.com');
            $this->email->cc($email);
            $this->email->subject('Ο χρήστης ' . $name . ' <' . $email . '> επιθυμεί να ' . $subject);
            $this->email->message($message);

            if($this->email->send()) {
                $data['contact_email_sent'] = "Το μήνυμά σας εστάλη. Ευχαριστούμε που επικοινωνήσατε μαζί μας.";
                $this->load->view("contact", $data);
            }
            else {
                show_error($this->email->print_debugger());
            }
        }
    }
} 