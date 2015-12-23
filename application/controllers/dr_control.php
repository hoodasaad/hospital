<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dr_control extends CI_Controller {

    private $back;

    // جزء العياده .... doc tabel
    function __construct() {
        parent::__construct();
        $this->load->model('User');
        $this->back = @$_SERVER['HTTP_REFERER'];

        if (!$this->session->userdata('UserId')) {
            redirect('/');
        } else {
            $access = $this->User->GetAccess($this->session->userdata('RoleId'));
            if ($access != 'dr_control') {
                redirect($access);
            }
        }
    }

    public function index() {
        $this->data['UserInfo'] = $this->User->Find($this->session->userdata('UserId'));
        $this->data['title'] = 'Doctor';
        $this->data['Url'] = 'dr_control';
        $this->load->view('layout/head', $this->data);
        $this->load->view('layout/header', $this->data);
        $this->Menu();
        $this->load->view('layout/frame_load');
        $this->load->view('layout/footer');
    }

    public function C_index() {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $row = $this->dr_model->C_get_contact();
        $this->load->view('dr/add_dr_pationt', $row);
        $this->load->view('layout/Check', $row);
    }

    public function C_add_user() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('location', 'Location', 'xss_clean|required');
        $this->form_validation->set_rules('quality', 'Quality', 'xss_clean|required');
        $this->form_validation->set_rules('severty', 'Severty', 'xss_clean|required');
        $this->form_validation->set_rules('duration', 'Duration', 'xss_clean|required');
        $this->form_validation->set_rules('factor', 'Modifying Factors', 'xss_clean|required');
        $this->form_validation->set_rules('assoc', 'Associated Signs & symptoms', 'xss_clean|required');
        $this->form_validation->set_rules('history', 'history', 'xss_clean|required');
        $this->form_validation->set_rules('tobaco', 'tobaco', 'xss_clean|required');
        $this->form_validation->set_rules('alcohol', 'alcohol', 'xss_clean|required');
        $this->form_validation->set_rules('drugs', 'drugs', 'xss_clean|required');
        $this->form_validation->set_rules('hiv', 'HIV risk factors', 'xss_clean|required');
        $this->form_validation->set_rules('occ', 'Occupation', 'xss_clean|required');
        $this->form_validation->set_rules('edu', 'Education', 'xss_clean|required');
        $this->form_validation->set_rules('marital', 'marital', 'xss_clean|required');
        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('dr_model');
            $this->dr_model->C_add();
            $this->load->view('dr/add_dr_pationt');
            redirect('dr_control/C_display');
        } else {
            echo validation_errors();
        }
    }

    public function C_display($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/C_display/';
        $config['total_rows'] = $this->dr_model->C_Count();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->dr_model->C_getpationt(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/view_dr', $data);
    }

    public function C_removecontact($id) {
        $this->load->model('my_model');
        $this->my_model->remove($id);
    }

    public function C_ContactDetails($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $data['contact'] = $this->dr_model->C_getContactByID($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('dr/show_dr', $data);
    }

    public function C_update() {
        $this->load->model('my_model');

        if ($this->input->post('submit')) {
            $id = $this->input->post('id');


            $data = array(
                'user' => $this->input->post('user'),
                'phone' => $this->input->post('phone'),
                'address' => $this->input->post('address'),
                'mail' => $this->input->post('mail'),
                'country' => $this->input->post('country')
            );

            $this->load->model('my_model');
            $this->my_model->update_post($id, $data);
            $this->load->view('update_contact');
        }
    }

    public function C_search() {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->C_search();
        $this->load->view('dr/search', $data);
    }

    public function C_CheckId($id) {
        //echo $id;
        parent::CheckMRN($id);
    }

    private function Menu() {
        $url = base_url() . 'index.php/dr_control/';
        $data['menu'] = [
            0 => ['title' => 'Home', 'url' => $url . 'Home', 'icon' => 'home', 'active' => 'active'],
            1 => ['title' => 'Add New Patient', 'url' => $url . 'C_index', 'icon' => 'user', 'active' => ''],
            2 => ['title' => 'Show All Patient', 'url' => $url . 'C_display', 'icon' => 'eye-open ', 'active' => ''],
            3 => ['title' => 'Add New Consultant Request', 'url' => $url . 'get_req', 'icon' => 'eye-open ', 'active' => ''],
            4 => ['title' => 'Show All Consultant Request', 'url' => $url . 'display_req', 'icon' => 'eye-open ', 'active' => ''],
            5 => ['title' => 'Add New Doctor Order', 'url' => $url . 'show_order', 'icon' => 'eye-open ', 'active' => ''],
            6 => ['title' => 'Show All Doctor Orders', 'url' => $url . 'display_order', 'icon' => 'eye-open ', 'active' => ''],
            7 => ['title' => 'Add New Nutration', 'url' => $url . 'get_nu', 'icon' => 'eye-open ', 'active' => ''],
            8 => ['title' => 'Show All Nutration', 'url' => $url . 'display_nu', 'icon' => 'eye-open ', 'active' => ''],
            9 => ['title' => 'Add New Patient & Relatives Education', 'url' => $url . 'get_rel', 'icon' => 'eye-open ', 'active' => ''],
            10 => ['title' => 'Show All Patient & Relatives Education', 'url' => $url . 'display_rel', 'icon' => 'eye-open ', 'active' => ''],
            11 => ['title' => 'Add New Patient Drug Char', 'url' => $url . 'get_user', 'icon' => 'eye-open ', 'active' => ''],
            12 => ['title' => 'Show Patient Drug Char', 'url' => $url . 'display', 'icon' => 'eye-open ', 'active' => ''],
            13 => ['title' => "Add New Physicians Progressive Notes", 'url' => $url . 'get_prog', 'icon' => 'eye-open ', 'active' => ''],
            14 => ['title' => "Show All Physicians Progressive Notes", 'url' => $url . 'display_prog', 'icon' => 'eye-open ', 'active' => ''],
            15 => ['title' => "Add Physical Assessment", 'url' => $url . 'get_physical', 'icon' => 'eye-open ', 'active' => ''],
            16 => ['title' => "Show All Physical Assessment", 'url' => $url . 'display_physical', 'icon' => 'eye-open ', 'active' => ''],
            17 => ['title' => "Add Insulin Charts", 'url' => $url . 'get_insulin', 'icon' => 'eye-open ', 'active' => ''],
            18 => ['title' => "Show All Insulin Charts", 'url' => $url . 'display_insulin', 'icon' => 'eye-open ', 'active' => ''],
            19 => ['title' => "Add Discharge summary", 'url' => $url . 'get_discharge', 'icon' => 'eye-open ', 'active' => ''],
            20 => ['title' => "Show All Discharge summary", 'url' => $url . 'display_discharge', 'icon' => 'eye-open ', 'active' => ''],
            21 => ['title' => 'Blood trams Fusion', 'url' => $url . 'BloodRequests', 'icon' => 'tint', 'active' => ''],
            22 => ['title' => "Add Voise Order", 'url' => $url . 'display_voise', 'icon' => 'eye-open ', 'active' => ''],
            23 => ['title' => "Add Needed Drug", 'url' => $url . 'get_need', 'icon' => 'eye-open ', 'active' => ''],
            24 => ['title' => "Show All Needed Drug", 'url' => $url . 'display_need', 'icon' => 'eye-open ', 'active' => ''],
            25 => ['title' => "Add Fluid Chart", 'url' => $url . 'get_fluid', 'icon' => 'eye-open ', 'active' => ''],
            26 => ['title' => "Show All Fluid Chart", 'url' => $url . 'display_fluid', 'icon' => 'eye-open ', 'active' => ''],
            27 => ['title' => "Review Fluid Chart", 'url' => $url . 'display_fluid_chart', 'icon' => 'eye-open ', 'active' => ''],
            28 => ['title' => "Add Radiology Request", 'url' => $url . 'get_rad', 'icon' => 'eye-open ', 'active' => ''],
            29 => ['title' => "Show All Radiology Request", 'url' => $url . 'display_rad', 'icon' => 'eye-open ', 'active' => ''],
            30 => ['title' => "Add Laboraory Request", 'url' => $url . 'get_lab', 'icon' => 'eye-open ', 'active' => ''],
            31 => ['title' => "Show All Laboraory Request", 'url' => $url . 'display_lab', 'icon' => 'eye-open ', 'active' => ''],
            32 => ['title' => "Add Fall Risk Assessment Tool", 'url' => $url . 'get_risk', 'icon' => 'eye-open ', 'active' => ''],
            33 => ['title' => "Add Pre anasthia Assessment", 'url' => $url . 'get_ana', 'icon' => 'eye-open ', 'active' => ''],
            34 => ['title' => "Show all Pre anasthia Assessmen", 'url' => $url . 'display_ana', 'icon' => 'eye-open ', 'active' => ''],
            35 => ['title' => "Add Perioperative Clinical Course", 'url' => $url . 'get_clinical', 'icon' => 'eye-open ', 'active' => ''],
            36 => ['title' => "Show all Perioperative Clinical Course", 'url' => $url . 'display_clinical', 'icon' => 'eye-open ', 'active' => ''],
            37 => ['title' => "Add Operative Report", 'url' => $url . 'get_operative', 'icon' => 'eye-open ', 'active' => ''],
            38 => ['title' => "Show all Operative Report", 'url' => $url . 'display_operative', 'icon' => 'eye-open ', 'active' => ''],
        ];
        $this->load->view('layout/menu', $data);
    }

//tabel doc_drug
    public function get_user() {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $row = $this->dr_model->get_contact();
        $this->load->view('dr/add_pationt_drug', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_user() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');
        $this->form_validation->set_rules('name', 'name', 'xss_clean|required');
        $this->form_validation->set_rules('patient_id', 'patient_id', 'xss_clean|integer');
        $this->form_validation->set_rules('age', 'age', 'xss_clean|required|integer');
        $this->form_validation->set_rules('gender', 'gender', 'xss_clean|required');
        $this->form_validation->set_rules('wt', 'wt', 'xss_clean|required|integer');
        $this->form_validation->set_rules('bsa', 'bsa', 'xss_clean|required');
        $this->form_validation->set_rules('dia', 'dia', 'xss_clean|required');
        $this->form_validation->set_rules('alle', 'alle', 'xss_clean|required');
        $this->form_validation->set_rules('drug', 'drug', 'xss_clean|required');
        $this->form_validation->set_rules('dose', 'dose', 'xss_clean|required');
        $this->form_validation->set_rules('freq', 'freq', 'xss_clean|required');
        $this->form_validation->set_rules('dur', 'dur', 'xss_clean|required');
        $this->form_validation->set_rules('route', 'route', 'xss_clean|required');
        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('date', 'date', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('dr_model');
            $this->dr_model->add();
            $this->load->view('dr/add_pationt_drug');
            redirect('dr_control/get_user');
        } else {
            echo validation_errors();
        }
    }

    public function display($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/display/';
        $config['total_rows'] = $this->dr_model->Count();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->dr_model->getpationt(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/view_pationt_drug', $data);
    }

    public function removecontact($id) {
        $this->load->model('my_model');
        $this->my_model->remove($id);
    }

    public function ContactDetails($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $data['contact'] = $this->dr_model->getContactByID($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('dr/show_pationt_drug', $data);
    }

    public function update() {
        $this->load->model('my_model');

        if ($this->input->post('submit')) {
            $id = $this->input->post('id');


            $data = array(
                'user' => $this->input->post('user'),
                'phone' => $this->input->post('phone'),
                'address' => $this->input->post('address'),
                'mail' => $this->input->post('mail'),
                'country' => $this->input->post('country')
            );

            $this->load->model('my_model');
            $this->my_model->update_post($id, $data);
            $this->load->view('update_contact');
        }
    }

    public function search() {

        $this->load->view('header');
        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search();
        $this->load->view('dr/search', $data);
        $this->load->view('footer');
    }

//tabel doc_ord

    public function show_order() {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $row = $this->dr_model->get_order();
        $this->load->view('dr/add_dr_order', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_order() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');
        $this->form_validation->set_rules('name', 'name', 'xss_clean|required');
        $this->form_validation->set_rules('patient_id', 'patient_id', 'xss_clean|integer');
        $this->form_validation->set_rules('age', 'age', 'xss_clean|required|integer');
        $this->form_validation->set_rules('gender', 'gender', 'xss_clean|required');
        $this->form_validation->set_rules('order', 'order', 'xss_clean|required');
        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('dr_model');
            $this->dr_model->add_order();
            $this->load->view('dr/add_dr_order');
            redirect('dr_control/show_order');
        } else {
            echo validation_errors();
        }
    }

    public function display_order($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/display_order/';
        $config['total_rows'] = $this->dr_model->Count_order();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->dr_model->get_orders(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/view_dr_order', $data);
    }

    public function order_Details($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $data['contact'] = $this->dr_model->getContactByorder($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('dr/show_dr_order', $data);
    }

    public function search_order() {

        $this->load->view('header');
        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search();
        $this->load->view('dr/search', $data);
        $this->load->view('footer');
    }

    // tabel doc_nu

    public function get_nu() {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $row = $this->dr_model->get_nu();
        $this->load->view('dr/add_nut', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_nu() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');
        $this->form_validation->set_rules('name', 'name', 'xss_clean|required');
        $this->form_validation->set_rules('patient_id', 'patient_id', 'xss_clean|integer');
        $this->form_validation->set_rules('age', 'age', 'xss_clean|required|integer');
        $this->form_validation->set_rules('gender', 'gender', 'xss_clean|required');
        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('dr_model');
            $this->dr_model->add_nu();
            $this->load->view('dr/add_nut');
            redirect('dr_control/get_user');
        } else {
            echo validation_errors();
        }
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
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $data['contact'] = $this->dr_model->getContactBynu($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('dr/show_nut', $data);
    }

    public function search_nu() {

        $this->load->view('header');
        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search();
        $this->load->view('dr/search', $data);
        $this->load->view('footer');
    }

// tabel doc_req
    public function get_req() {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $row = $this->dr_model->get_req();
        $this->load->view('dr/add_cons', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_req() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');
        $this->form_validation->set_rules('name', 'name', 'xss_clean|required');
        $this->form_validation->set_rules('patient_id', 'patient_id', 'xss_clean|integer');
        $this->form_validation->set_rules('age', 'age', 'xss_clean|required|integer');
        $this->form_validation->set_rules('gender', 'gender', 'xss_clean|required');
        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('dr_model');
            $this->dr_model->add_req();
            $this->load->view('dr/add_cons');
            redirect('dr_control/get_req');
        } else {
            echo validation_errors();
        }
    }

    public function display_req($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/display_req/';
        $config['total_rows'] = $this->dr_model->Count_req();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->dr_model->get_reqe(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/view_cons', $data);
    }

    public function ContactDetails_req($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $data['contact'] = $this->dr_model->getContactByreq($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('dr/show_cons', $data);
    }

    public function search_req() {

        $this->load->view('header');
        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search_req();
        $this->load->view('dr/search', $data);
        $this->load->view('footer');
    }

    // tabel doc_prog

    public function get_prog() {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $row = $this->dr_model->get_prog();
        $this->load->view('dr/add_prog', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_prog() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');
        $this->form_validation->set_rules('name', 'name', 'xss_clean|required');
        $this->form_validation->set_rules('patient_id', 'patient_id', 'xss_clean|integer');
        $this->form_validation->set_rules('age', 'age', 'xss_clean|required|integer');
        $this->form_validation->set_rules('gender', 'gender', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('dr_model');
            $this->dr_model->add_prog();
            $this->load->view('dr/add_prog');
            redirect('dr_control/get_prog');
        } else {
            echo validation_errors();
        }
    }

    public function display_prog($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/display_prog/';
        $config['total_rows'] = $this->dr_model->Count_prog();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->dr_model->get_progr(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/view_prog', $data);
    }

    public function ContactDetails_prog($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $data['contact'] = $this->dr_model->getContactByprog($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('dr/show_prog', $data);
    }

    public function search_prog() {

        $this->load->view('header');
        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search_req();
        $this->load->view('dr/search', $data);
        $this->load->view('footer');
    }

    // tabel doc_rel

    public function get_rel() {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $row = $this->dr_model->get_rel();
        $this->load->view('dr/add_patient_relative', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_rel() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');
        $this->form_validation->set_rules('name', 'name', 'xss_clean|required');
        $this->form_validation->set_rules('patient_id', 'patient_id', 'xss_clean|integer');
        $this->form_validation->set_rules('age', 'age', 'xss_clean|required|integer');
        $this->form_validation->set_rules('gender', 'gender', 'xss_clean|required');
        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('dr_model');
            $this->dr_model->add_rel();
            $this->load->view('dr/add_patient_relative');
            redirect('dr_control/get_rel');
        } else {
            echo validation_errors();
        }
    }

    public function display_rel($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/display_rel/';
        $config['total_rows'] = $this->dr_model->Count_rel();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->dr_model->get_rel(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/view_patient_relative', $data);
    }

    public function ContactDetails_rel($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $data['contact'] = $this->dr_model->getContactByrel($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('dr/show_patient_relative', $data);
    }

    public function search_rel() {

        $this->load->view('header');
        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search_rel();
        $this->load->view('dr/search', $data);
        $this->load->view('footer');
    }

    //doc_physical


    public function get_physical() {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $row = $this->dr_model->get_physical();
        $this->load->view('dr/add_physical_assment', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_physical() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');
        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('dr_model');
            $this->dr_model->add_physical();
            $this->load->view('dr/add_physical_assment');
            redirect('dr_control/get_physical');
        } else {
            echo validation_errors();
        }
    }

    public function display_physical($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/display_physical/';
        $config['total_rows'] = $this->dr_model->Count_physical();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->dr_model->get_physica(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/view_physical_assment', $data);
    }

    public function ContactDetails_physical($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $data['contact'] = $this->dr_model->getContactByphysical($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('dr/show_physical_assment', $data);
    }

    public function search_physical() {

        $this->load->view('header');
        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search_physical();
        $this->load->view('dr/search', $data);
        $this->load->view('footer');
    }

// tabel doc_insulin
    public function get_insulin() {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $row = $this->dr_model->get_insulin();
        $this->load->view('dr/add_insulin', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_insulin() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');

        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('dr_model');
            $this->dr_model->add_insulin();
            $this->load->view('dr/add_physical_assment');
            redirect('dr_control/get_insulin');
        } else {
            echo validation_errors();
        }
    }

    public function display_insulin($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/display_insulin/';
        $config['total_rows'] = $this->dr_model->Count_insulin();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->dr_model->get_insuli(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/view_insulin', $data);
    }

    public function ContactDetails_insulin($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $data['contact'] = $this->dr_model->getContactByinsulin($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('dr/show_insulin', $data);
    }

    public function search_insulin() {

        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search_insulin();
        $this->load->view('dr/search', $data);
    }

    // tabel doc_discharge
    public function get_discharge() {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $row = $this->dr_model->get_discharge();
        $this->load->view('dr/add_discharge_summary', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_discharge() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');

        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('dr_model');
            $this->dr_model->add_discharge();
            $this->load->view('dr/add_discharge_summary');
            redirect('dr_control/get_discharge');
        } else {
            echo validation_errors();
        }
    }

    public function display_discharge($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/display_discharge/';
        $config['total_rows'] = $this->dr_model->Count_discharge();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->dr_model->get_discharg(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/view_discharge_summary', $data);
    }

    public function ContactDetails_discharge($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $data['contact'] = $this->dr_model->getContactBydischarge($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('dr/show_discharge_summary', $data);
    }

    public function search_discharge() {

        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search_insulin();
        $this->load->view('dr/search', $data);
    }

    // tabel blood
    public function BloodRequests($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('BloodTramsFusion');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/BloodRequests/';
        $config['total_rows'] = $this->BloodTramsFusion->Count();
        $config['per_page'] = 5;
        $this->pagination->initialize($config);
        $data['All'] = $this->BloodTramsFusion->GetPagination(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/BloodRequests', $data);
    }

    public function AddBloodRequest() {
        $this->load->view('layout/style');
        $this->load->model('BloodTramsFusion');
        $this->load->view('dr/inc/AddBloodRequest');
        $this->load->view('layout/Check');
    }

    public function CreateBloodRequest() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('MRN', 'MRN', 'numeric|required');
        if ($this->form_validation->run()) {
            $this->load->model('BloodTramsFusion');
            $create = $this->BloodTramsFusion->Create();
            if ($create) {
                $this->session->set_flashdata('done', 'Your BloodRequest added');
                redirect('dr_control/BloodRequests');
            } else {
                $this->session->set_flashdata('error', validation_errors());
                redirect($this->back);
            }
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect($this->back);
        }
    }

    public function ShowBloodRequest($id) {
        $this->load->view('layout/style');
        $this->load->model('BloodTramsFusion');
        $this->load->model('Patient');
        $this->load->model('Admission');
        $data['row'] = $this->BloodTramsFusion->Find($id);
        $data['patient'] = $this->Patient->Find($data['row']->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['row']->mrn);
        $this->load->model('MonitorRing');
        $data['All'] = $this->MonitorRing->GetAll($id);
        $this->load->view('dr/inc/ShowBloodRequest', $data);
    }

    public function AddMonitorRing($id) {
        $this->load->view('layout/style');
        $this->load->model('MonitorRing');
        $data['All'] = $this->MonitorRing->GetAll($id);
        $data['blood_trams_fusion_id'] = $id;
        $this->load->view('dr/inc/AddMonitorRing', $data);
    }

    public function CreateMonitorRing() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('blood_trams_fusion_id', 'blood_trams_fusion_id', 'numeric|required');
        if ($this->form_validation->run()) {
            $this->load->model('MonitorRing');
            $create = $this->MonitorRing->Create();
            if ($create) {
                $this->session->set_flashdata('done', 'Your MonitorRing added');
                redirect($this->back);
            } else {
                $this->session->set_flashdata('error', validation_errors());
                redirect($this->back);
            }
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect($this->back);
        }
    }

    // tabel doc_voise
    public function get_voise($id) {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $row ['id'] = $id;
        $this->load->view('dr/add_voise_order', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_voise($id) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');

        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('dr_model');
            $this->dr_model->add_voise($id);
            $this->load->view('dr/add_voise_order');
            redirect('dr_control/get_voise/' . $id);
        } else {
            echo validation_errors();
        }
    }

    public function display_voise($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/display_voise/';
        $config['total_rows'] = $this->dr_model->Count_voise();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->dr_model->getvoise(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/view_voise_order', $data);
    }

    public function ContactDetails_voise($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $data['contact'] = $this->dr_model->getContactByvoise($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('dr/show_voise_order', $data);
    }

    public function search_voise() {

        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search_voise();
        $this->load->view('dr/search', $data);
    }

    //tabel doc_need
    public function get_need() {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $row = $this->dr_model->get_need();
        $this->load->view('dr/add_drug', $row);
        $this->load->view('layout/Check');
    }

    public function add_need() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');

        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('dr_model');
            $this->dr_model->add_need();
            $this->load->view('dr/add_drug');
            redirect('dr_control/get_need');
        } else {
            echo validation_errors();
        }
    }

    public function display_need($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/display_need/';
        $config['total_rows'] = $this->dr_model->Count_need();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->dr_model->getneed(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/view_drug', $data);
    }

    public function ContactDetails_need($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $data['contact'] = $this->dr_model->getContactByneed($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('dr/show_drug', $data);
    }

    public function search_need() {

        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search_need();
        $this->load->view('dr/search', $data);
    }

// tabel doc_fluid
    public function get_fluid() {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $row = $this->dr_model->get_fluid();
        $this->load->view('dr/add_fluid', $row);
        $this->load->view('layout/Check');
    }

    public function add_fluid() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');

        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('dr_model');
            $this->dr_model->add_fluid();
            $this->load->view('dr/add_fluid');
            redirect('dr_control/get_fluid');
        } else {
            echo validation_errors();
        }
    }

    public function display_fluid($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/display_fluid/';
        $config['total_rows'] = $this->dr_model->Count_fluid();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->dr_model->getfluid(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/view_fluid', $data);
    }

    public function ContactDetails_fluid($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $data['contact'] = $this->dr_model->getContactByfluid($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('dr/show_fluid', $data);
    }

    public function search_fluid() {

        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search_fluid();
        $this->load->view('dr/search', $data);
    }

    // tabel doc_fluid_chart
    public function get_fluid_chart($id) {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $row['id'] = $id;
        $this->load->view('dr/add_fluid_chart', $row);
        $this->load->view('layout/Check');
    }

    public function add_fluid_chart($id) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');

        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('dr_model');
            $this->dr_model->add_fluid_chart($id);
            $this->load->view('dr/add_fluid_chart');
            redirect('dr_control/get_fluid_chart/' . $id);
        } else {
            echo validation_errors();
        }
    }

    public function display_fluid_chart($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/display_fluid_chart/';
        $config['total_rows'] = $this->dr_model->Count_fluid_chart();
        $config['total_rows'] = $this->dr_model->Count_fluid();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->dr_model->getfluid(12, $start);
        $data['nur'] = $this->dr_model->getfluidchart(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/view_fluid_chart', $data);
    }

    // tabel doc_rad
    public function get_rad() {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $row = $this->dr_model->get_rad();
        $this->load->view('dr/add_rad', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_rad() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');

        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('dr_model');
            $this->dr_model->add_rad();
            $this->load->view('dr/add_rad');
            redirect('dr_control/get_rad');
        } else {
            echo validation_errors();
        }
    }

    public function display_rad($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/display_rad/';
        $config['total_rows'] = $this->dr_model->Count_rad();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->dr_model->getrad(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/view_rad', $data);
    }

    public function ContactDetails_rad($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $data['contact'] = $this->dr_model->getContactByrad($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('dr/show_rad', $data);
    }

    public function search_rad() {

        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search_rad();
        $this->load->view('dr/search', $data);
    }

    // tabel doc_lab
    public function get_lab() {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $row = $this->dr_model->get_lab();
        $this->load->view('dr/add_lab', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_lab() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');

        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('dr_model');
            $this->dr_model->add_lab();
            $this->load->view('dr/add_lab');
            redirect('dr_control/get_lab');
        } else {
            echo validation_errors();
        }
    }

    public function display_lab($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/display_lab/';
        $config['total_rows'] = $this->dr_model->Count_lab();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->dr_model->getlab(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/view_lab', $data);
    }

    public function ContactDetails_lab($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $data['contact'] = $this->dr_model->getContactBylab($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('dr/show_lab', $data);
    }

    public function search_lab() {

        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search_lab();
        $this->load->view('dr/search', $data);
    }

    // tabel doc_risk
    public function get_risk() {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $row = $this->dr_model->get_risk();
        $this->load->view('dr/add_risk', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_risk() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');

        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('Risk');
            $this->Risk->Create();
            //$this->load->view('dr/add_risk');
            redirect('dr_control/display_risk');
        } else {
            echo validation_errors();
        }
    }

    public function display_risk($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('Risk');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/display_risk/';
        $config['total_rows'] = $this->Risk->Count();
        $config['per_page'] = 5;
        $this->pagination->initialize($config);
        $data['All'] = $this->Risk->GetPagination(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/risk/showRisk', $data);
    }

    public function ContactDetails_risk($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('Risk');
        $data['contact'] = $this->Risk->Find($id);
        $data['patient'] = $this->Patient->Find($data['contact']->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact']->mrn);
        $this->load->view('dr/risk/findRisk', $data);
    }

    public function search_risk() {

        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search_lab();
        $this->load->view('dr/search', $data);
    }

    // دكتور التخدير
    // tabel doc_ana
    public function get_ana() {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $row = $this->dr_model->get_ana();
        $this->load->view('dr/ana/add_anasthia', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_ana() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');

        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('dr_model');
            $this->dr_model->add_ana();
            $this->load->view('dr/ana/add_anasthia');
            redirect('dr_control/get_ana');
        } else {
            echo validation_errors();
        }
    }

    public function display_ana($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/display_ana/';
        $config['total_rows'] = $this->dr_model->Count_ana();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->dr_model->getana(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/ana/view_anasthia', $data);
    }

    public function ContactDetails_ana($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $data['contact'] = $this->dr_model->getContactByana($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('dr/ana/show_anasthia', $data);
    }

    public function search_ana() {

        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search_lab();
        $this->load->view('dr/search', $data);
    }

    // tabel doc_clinical
    public function get_clinical() {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $row = $this->dr_model->get_clinical();
        $this->load->view('dr/ana/add_clinical', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_clinical() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');

        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('dr_model');
            $this->dr_model->add_clinical();
            $this->load->view('dr/ana/add_clinical');
            redirect('dr_control/get_clinical');
        } else {
            echo validation_errors();
        }
    }

    public function display_clinical($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/display_clinical/';
        $config['total_rows'] = $this->dr_model->Count_clinical();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->dr_model->getclinical(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/ana/view_clinical', $data);
    }

    public function ContactDetails_clinical($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $data['contact'] = $this->dr_model->getContactByclinical($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('dr/ana/show_clinical', $data);
    }

    public function search_clinical() {

        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search_clinical();
        $this->load->view('dr/search', $data);
    }

    // tabel doc_operative
    public function get_operative() {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $row = $this->dr_model->get_operative();
        $this->load->view('dr/sur/add_operative', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_operative() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');

        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('dr_model');
            $this->dr_model->add_operative();
            $this->load->view('dr/sur/add_operative');
            redirect('dr_control/get_operative');
        } else {
            echo validation_errors();
        }
    }

    public function display_operative($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/display_operative/';
        $config['total_rows'] = $this->dr_model->Count_operative();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->dr_model->getoperative(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/sur/view_operative', $data);
    }

    public function ContactDetails_operative($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $data['contact'] = $this->dr_model->getContactByoperative($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('dr/sur/show_operative', $data);
    }

    public function search_operative() {

        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search_operative();
        $this->load->view('dr/search', $data);
    }

    // mohamed
    public function RecordAnesthesia($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('Records');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/RecordAnesthesia/';
        $config['total_rows'] = $this->Records->Count();
        $config['per_page'] = 5;
        $this->pagination->initialize($config);
        $data['All'] = $this->Records->GetPagination(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/Records/Records', $data);
    }

    public function AddRecord() {
        $this->load->view('layout/style');
        $this->load->view('dr/Records/inc/AddRecord');
        $this->load->view('layout/Check');
    }

    public function CreateRecord() {
        $this->load->model('Records');
        $add = $this->Records->Create();
        if ($add) {
            redirect('dr_control/RecordAnesthesia');
        } else {
            redirect($this->back);
        }
    }

    public function FindRecord($id) {
        $this->load->view('layout/style');
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->model('Records');
        $data['Record'] = $this->Records->Find($id);
        $data['patient'] = $this->Patient->Find($data['Record']->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['Record']->mrn);
        $this->load->view('dr/Records/inc/FindRecord', $data);
    }

    public function Recovery($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('Recovery');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/Recovery/';
        $config['total_rows'] = $this->Recovery->Count();
        $config['per_page'] = 5;
        $this->pagination->initialize($config);
        $data['All'] = $this->Recovery->GetPagination(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/Recovery/Recovery', $data);
    }

    public function AddRecovery() {
        $this->load->view('layout/style');
        $this->load->view('dr/Recovery/inc/AddRecovery');
        $this->load->view('layout/Check');
    }

    public function CreateRecovery() {
        $this->load->model('Recovery');
        $add = $this->Recovery->Create();
        if ($add) {
            redirect('dr_control/Recovery');
        } else {
            redirect($this->back);
        }
    }

    public function FindRecovery($id) {
        $this->load->view('layout/style');
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->model('Recovery');
        $data['Recovery'] = $this->Recovery->Find($id);
        $data['patient'] = $this->Patient->Find($data['Recovery']->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['Recovery']->mrn);
        $this->load->view('dr/Recovery/inc/FindRecovery', $data);
    }

}

?>