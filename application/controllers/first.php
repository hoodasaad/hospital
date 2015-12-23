<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class First extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('User');
        if(!$this->session->userdata('UserId')){
            redirect('/');
        }else{
            $access = $this->User->GetAccess($this->session->userdata('RoleId'));
            if($access != 'first'){
                redirect($access);
            }
        }
    }
    public function index(){
        $this->data['UserInfo'] = $this->User->Find($this->session->userdata('UserId'));
        $this->data['title'] = 'Doctor';
        $this->data['Url'] = 'first';
        $this->load->view('layout/head',$this->data);
        $this->load->view('layout/header',$this->data);
        $this->Menu();
        $this->load->view('layout/frame_load');
        $this->load->view('layout/footer');
    }
    public function C_index() {
        $this->load->view('layout/style');
        $this->load->model('clinc_model');
        $row = $this->clinc_model->get_contact();
        $this->load->view('res/add_res_pationt', $row);
    }

    public function add_user() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first', 'First Name', 'required|xss_clean|alpha');
        $this->form_validation->set_rules('second', 'Second Name', 'required|xss_clean|alpha');
        $this->form_validation->set_rules('third', 'Third Name', 'required|xss_clean|alpha');
        $this->form_validation->set_rules('last', 'Last Name', 'required|xss_clean|alpha');
        $this->form_validation->set_rules('pationt_id', 'Pationt Id', 'xss_clean|integer|max_length[14]|is_unique[res.pationt_id]');
        $this->form_validation->set_rules('clinc', 'Clinc', 'required|xss_clean|alpha');
        $this->form_validation->set_rules('number', 'Number', 'required|xss_clean|integer|max_length[4]');
        $this->form_validation->set_rules('phone', 'Telephone #work', 'xss_clean|integer||is_unique[res.phone]');
        $this->form_validation->set_rules('provider', 'ProVider Seeing PT.Todat', 'required|xss_clean|alpha');
        $this->form_validation->set_rules('doctor', 'doctor', 'xss_clean|alpha');

        if ($this->form_validation->run()) {
            $this->load->model('clinc_model');
            $this->clinc_model->add();
            $this->load->view('res/add_res_pationt');
            redirect('first/display');
        } else {
            echo validation_errors();
        }
    }

    public function accept() {
        $this->load->model('clinc_model');
        $query['contact'] = $this->clinc_model->lastrow();
        $row['data'] = $query->last_row();
    }

    public function display($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('clinc_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/first/display/';
        $config['total_rows'] = $this->clinc_model->Count();
        $config['per_page'] = 5;
        $this->pagination->initialize($config);
        $data['phone'] = $this->clinc_model->getpationt(5, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('res/view_res', $data);
    }

    public function removecontact($id) {
        $this->load->model('my_model');
        $this->my_model->remove($id);
    }

    public function ContactDetails($id) {
        $this->load->view('layout/style');

        $this->load->model('clinc_model');
        $data['contact'] = $this->clinc_model->getContactByID($id);
        $this->load->view('res/show_res', $data);
    }

    public function update() {
        $this->load->model('clinc_model');

        if ($this->input->post('submit')) {
            $id = $this->input->post('id');
            $data['first'] = $this->input->post('first');
            $data['second'] = $this->input->post('second');
            $data['third'] = $this->input->post('third');
            $data['last'] = $this->input->post('last');
            $data['pationt_id'] = $this->input->post('pationt_id');
            $data['clinc'] = $this->input->post('clinc');
            $data['number'] = $this->input->post('number');
            $data['phone'] = $this->input->post('phone');
            $data['provider'] = $this->input->post('provider');
            $data['time'] = $this->input->post('time');
            $data['full_name'] = $this->input->post('full_name');

            $this->load->model('clinc_model');
            $this->clinc_model->update_post($id, $data);
        }
    }

    public function search() {
        $this->load->view('layout/style');
        $this->load->model('clinc_model');
        $data['phone'] = $this->clinc_model->search();
        $this->load->view('res/search', $data);
    }
    
    public function PationtId($id){
        $this->load->model('clinc_model');
        $check = $this->clinc_model->CheckPationtId($id);
        if($check == 0){
            echo 1;
        }else{
            echo 0;
        }
    }
    public function Phone($id){
        $this->load->model('clinc_model');
        $check = $this->clinc_model->CheckPhone($id);
        if($check == 0){
            echo 1;
        }else{
            echo 0;
        }
    }

    private function Menu(){
        $url = base_url().'index.php/first/';
        $data['menu'] =  [
            0=>['title'=>'Home', 'url'=>$url.'Home', 'icon'=>'home','active'=>'active'],
            1=>['title'=>'Add New Patient', 'url'=>$url.'C_index', 'icon'=>'user','active'=>''],
            2=>['title'=>'Show All Patient', 'url'=>$url.'display' ,'icon'=>'eye-open ','active'=>''],
        ];
        $this->load->view('layout/menu',$data);
    }

}

?>