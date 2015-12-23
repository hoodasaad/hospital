<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public $data = [];

    function __construct() {
        parent::__construct();
        $this->load->model('User');
        if ($this->session->userdata('UserId')) {
            $access = $this->User->GetAccess($this->session->userdata('RoleId'));
            redirect($access);
        }
    }

    public function index() {
        //echo md5("123");
        $this->load->helper('url');

        $this->data['title'] = 'Login';
        $this->load->view('layout/head', $this->data);
        $this->load->view('login');
        $this->load->view('layout/footer');
    }

    public function login() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('UserName', 'UserName', 'required');
        $this->form_validation->set_rules('Password', 'Password', 'required');
        if ($this->form_validation->run()) {
            if ($this->User->Check() == 1) {
                $user = $this->User->InfoUser()[0];
                //var_dump($user);
                $this->session->set_userdata('UserId', $user->id);
                $this->session->set_userdata('RoleId', $user->role_id);
                $this->User->UpdateLastLogin($user->id);
                $access = $this->User->GetAccess($user->role_id);
                redirect($access);
            } else {
                var_dump($_POST);
            }
        } else {
            echo validation_errors();
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */