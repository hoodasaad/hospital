<?php

class Nut_control extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('User');
        if (!$this->session->userdata('UserId')) {
            redirect('/');
        } else {
            $access = $this->User->GetAccess($this->session->userdata('RoleId'));
            if ($access != 'nut_control') {
                redirect($access);
            }
        }
    }

    public function index() {
        $this->data['UserInfo'] = $this->User->Find($this->session->userdata('UserId'));
        $this->data['title'] = 'Nutrationdl';
        $this->data['Url'] = 'nut_control';
        $this->load->view('layout/head', $this->data);
        $this->load->view('layout/header', $this->data);
        $this->Menu();
        $this->load->view('layout/frame_load');
        $this->load->view('layout/footer');
    }

    public function C_index($id) {
        $this->load->view('layout/style');
        $this->load->model('nut_model');
        $data['id'] = $id;
        $this->load->view('nut/add_nut', $data);
        $this->load->view('layout/Check',$data);
    }

    public function C_add_user($id) {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');
        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('nut_model');
            $this->nut_model->C_add($id);
            $this->load->view('nut/add_nut');
            redirect('nut_control/C_index/' . $id);
        } else {
            echo validation_errors();
        }
    }

    public function C_display($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('nut_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/nut_control/C_display/';
        $config['total_rows'] = $this->nut_model->C_Count();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->nut_model->C_getpationt(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('nut/view_nut', $data);
    }

    public function C_ContactDetails($id) {
        $this->load->view('layout/style');
        $this->load->model('nut_model');
        $data['contact'] = $this->nut_model->C_getContactByID($id);
        $this->load->view('nut/show_nut', $data);
    }

    public function C_search() {
        $this->load->view('layout/style');
        $this->load->model('nut_model');
        $data['contacts'] = $this->nut_model->C_search();
        $this->load->view('nut/search', $data);
    }

    public function C_CheckId($id) {
        //echo $id;
        parent::CheckMRN($id);
    }

    private function Menu() {
        $url = base_url() . 'index.php/nut_control/';
        $data['menu'] = [
            0 => ['title' => 'Home', 'url' => $url . 'Home', 'icon' => 'home', 'active' => 'active'],
            1 => ['title' => 'Show All Nutration', 'url' => $url . 'C_display', 'icon' => 'eye-open ', 'active' => ''],
        ];
        $this->load->view('layout/menu', $data);
    }

    // doc_nu
    public function get_nu() {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $row = $this->dr_model->get_nu();
        $this->load->view('dr/add_nut', $row);
    }

    public function display_nu($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/display_nu/';
        $config['total_rows'] = $this->dr_model->Count_nu();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->dr_model->get_nus(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/view_nut', $data);
    }

    public function ContactDetails_nu($id) {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $data['contact'] = $this->dr_model->getContactBynu($id);
        $this->load->view('dr/show_nut', $data);
    }

    public function search_nu() {

        $this->load->view('header');
        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search();
        $this->load->view('dr/search', $data);
        $this->load->view('footer');
    }

}
