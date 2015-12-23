<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cons_control extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('User');
        if (!$this->session->userdata('UserId')) {
            redirect('/');
        } else {
            $access = $this->User->GetAccess($this->session->userdata('RoleId'));
            if ($access != 'cons_control') {
                redirect($access);
            }
        }
    }

    public function index(){
        $this->data['UserInfo'] = $this->User->Find($this->session->userdata('UserId'));
        $this->data['title'] = 'Consultant';
        $this->data['Url'] = 'cons_control';
        $this->load->view('layout/head',$this->data);
        $this->load->view('layout/header',$this->data);
        $this->Menu();
        $this->load->view('layout/frame_load');
        $this->load->view('layout/footer');
    }

    public function C_index() {
        $this->load->view('layout/style');
        $this->load->model('cons_model');
        $row = $this->cons_model->get_contact();
        $this->load->view('cons/add_cons_pationt', $row);
        $this->load->view('layout/Check');
                
    }

    public function add_user() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|alpha|required');

        if ($this->form_validation->run()) {
            $this->load->model('cons_model');
            $this->cons_model->add();
            $this->load->view('cons/add_cons_pationt');
            redirect('cons_control/display');
        } else {
            echo validation_errors();
        }
    }

    public function accept() {
        $this->load->model('cons_model');
        $query['contact'] = $this->clinc_model->lastrow();
        $row['data'] = $query->last_row();
    }

    public function display($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('cons_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/first/display/';
        $config['total_rows'] = $this->cons_model->Count();
        $config['per_page'] = 5;
        $this->pagination->initialize($config);
        $data['phone'] = $this->cons_model->getpationt(5, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('cons/view_cons', $data);
    }

    public function ContactDetails($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('cons_model');
        $data['contact'] = $this->cons_model->getContactByID($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('cons/show_cons', $data);
    }

    public function search() {
        $this->load->view('res/header');
        $this->load->model('cons_model');
        $data['phone'] = $this->cons_model->search();
        $this->load->view('cons/search', $data);
        $this->load->view('footer');
    }
    public function C_CheckId($id) {
        //echo $id;
        parent::CheckMRN($id);
    }

    private function Menu(){
        $url = base_url().'index.php/cons_control/';
        $data['menu'] =  [
            0=>['title'=>'Home', 'url'=>$url.'Home', 'icon'=>'home','active'=>'active'],
            1=>['title'=>'Add New Patient', 'url'=>$url.'C_index', 'icon'=>'user','active'=>''],
            2=>['title'=>'Show All Patient', 'url'=>$url.'display' ,'icon'=>'eye-open ','active'=>''],
        ];
        $this->load->view('layout/menu',$data);
    }

}

?>