<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Nurse_control extends CI_Controller {

    private $back;

    // جزء العياده ..... nurse tabel

    function __construct() {
        parent::__construct();
        $this->load->model('User');
        $this->back = @$_SERVER['HTTP_REFERER'];

        if (!$this->session->userdata('UserId')) {
            redirect('/');
        } else {
            $access = $this->User->GetAccess($this->session->userdata('RoleId'));
            if ($access != 'nurse_control') {
                redirect($access);
            }
        }
    }

    public function index() {
        $this->data['UserInfo'] = $this->User->Find($this->session->userdata('UserId'));
        $this->data['title'] = 'Nurse';
        $this->data['Url'] = 'nurse_control';
        $this->load->view('layout/head', $this->data);
        $this->load->view('layout/header', $this->data);
        $this->Menu();
        $this->load->view('layout/frame_load');
        $this->load->view('layout/footer');
    }

    public function C_index() {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $row = $this->nurse_model->C_get_contact();
        $this->load->view('nurse/add_nur_pationt', $row);
        $this->load->view('layout/Check', $row);
    }

    public function C_add_user() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('allegy', 'Allegy', 'xss_clean|alpha');
        $this->form_validation->set_rules('number_1', 'number_1', 'xss_clean');
        $this->form_validation->set_rules('dose_1', 'Dose', 'xss_clean');
        $this->form_validation->set_rules('time_1', 'Last Time', 'xss_clean');
        $this->form_validation->set_rules('number_2', 'number_2', 'xss_clean');
        $this->form_validation->set_rules('dose_2', 'Dose', 'xss_clean');
        $this->form_validation->set_rules('time_2', 'Last Time', 'xss_clean');
        $this->form_validation->set_rules('number_3', 'number_3', 'xss_clean');
        $this->form_validation->set_rules('dose_3', 'Dose', 'xss_clean');
        $this->form_validation->set_rules('time_3', 'Last Time', 'xss_clean');
        $this->form_validation->set_rules('number_4', 'number_4', 'xss_clean');
        $this->form_validation->set_rules('dose_4', 'Dose', 'xss_clean');
        $this->form_validation->set_rules('time_4', 'Last Time', 'xss_clean');
        $this->form_validation->set_rules('wt', 'WT', 'xss_clean|integer');
        $this->form_validation->set_rules('ht', 'ht', 'xss_clean|integer');
        $this->form_validation->set_rules('temp', 'Temp', 'xss_clean|numeric');
        $this->form_validation->set_rules('min', 'Bp min', 'xss_clean|integer');
        $this->form_validation->set_rules('max', 'Bp max', 'xss_clean|integer');
        $this->form_validation->set_rules('P', 'p', 'xss_clean|integer');
        $this->form_validation->set_rules('Pain', 'pain', 'xss_clean|integer');
        $this->form_validation->set_rules('RR', 'rr', 'xss_clean|integer');
        $this->form_validation->set_rules('pox', 'P OX', 'xss_clean|integer');
        $this->form_validation->set_rules('complain', 'complain', 'xss_clean');
        $this->form_validation->set_rules('time', 'time', 'required|xss_clean');
        $this->form_validation->set_rules('sign', 'Nurse Signature', 'required|xss_clean|alpha');

        if ($this->form_validation->run()) {
            $this->load->model('nurse_model');
            $this->nurse_model->C_add();
            $this->load->view('nurse/add_nur_pationt');
            redirect('nurse_control/C_display');
        } else {
            echo validation_errors();
        }
    }

    public function C_display($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/nurse_control/C_display/';
        $config['total_rows'] = $this->nurse_model->C_Count();
        $config['per_page'] = 5;
        $this->pagination->initialize($config);
        $data['phone'] = $this->nurse_model->C_getpationt(5, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('nurse/view_nur', $data);
    }

    public function C_removecontact($id) {
        $this->load->model('my_model');
        $this->my_model->remove($id);
    }

    public function C_ContactDetails($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $data['contact'] = $this->nurse_model->C_getContactByID($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('nurse/show_nur', $data);
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

        $this->load->view('nurse/header');
        $this->load->model('nurse_model');
        $data['phone'] = $this->nurse_model->C_search();
        $this->load->view('nurse/search', $data);
        $this->load->view('footer');
    }

    public function C_CheckId($id) {
        //echo $id;
        parent::CheckMRN($id);
    }

    private function Menu() {
        $url = base_url() . 'index.php/nurse_control/';
        $data['menu'] = [
            0 => ['title' => 'Home', 'url' => $url . 'Home', 'icon' => 'home', 'active' => 'active'],
            1 => ['title' => 'Add New Patient', 'url' => $url . 'C_index', 'icon' => 'user', 'active' => ''],
            2 => ['title' => 'Show All Patient', 'url' => $url . 'C_display', 'icon' => 'eye-open ', 'active' => ''],
            3 => ['title' => 'Add New Nursing assessment', 'url' => $url . 'get_asses', 'icon' => 'eye-open ', 'active' => ''],
            4 => ['title' => 'Show Nursing assessment', 'url' => $url . 'display_asses', 'icon' => 'eye-open ', 'active' => ''],
            5 => ['title' => 'Add New Nursing Notes', 'url' => $url . 'get_user', 'icon' => 'eye-open ', 'active' => ''],
            6 => ['title' => 'Show All Nursing Notes', 'url' => $url . 'display', 'icon' => 'eye-open ', 'active' => ''],
            7 => ['title' => 'Add New Pain Assessmens', 'url' => $url . 'get_pain', 'icon' => 'eye-open ', 'active' => ''],
            8 => ['title' => 'Show All Pain Assessmens', 'url' => $url . 'display_pain', 'icon' => 'eye-open ', 'active' => ''],
            9 => ['title' => 'Add Vital Signs', 'url' => $url . 'get_virtal', 'icon' => 'eye-open ', 'active' => ''],
            10 => ['title' => 'Show All Vital Signs', 'url' => $url . 'display_virtal', 'icon' => 'eye-open ', 'active' => ''],
            11 => ['title' => 'Add Diabetic sheet', 'url' => $url . 'get_sheet', 'icon' => 'eye-open ', 'active' => ''],
            12 => ['title' => 'Show All Diabetic sheet', 'url' => $url . 'display_sheet', 'icon' => 'eye-open ', 'active' => ''],
            13 => ['title' => 'Add Nursing Care Plane', 'url' => $url . 'get_care', 'icon' => 'eye-open ', 'active' => ''],
            14 => ['title' => 'Show All  Nursing Care Plane', 'url' => $url . 'display_care', 'icon' => 'eye-open ', 'active' => ''],
            15 => ['title' => 'Out In Put Chart', 'url' => $url . 'PutChartDay', 'icon' => 'glass ', 'active' => ''],
            16 => ['title' => 'Add Voise Order', 'url' => $url . 'get_voise', 'icon' => 'glass ', 'active' => ''],
            17 => ['title' => 'Show All Voise Order', 'url' => $url . 'display_voise', 'icon' => 'glass ', 'active' => ''],
            18 => ['title' => 'Add Drug Chart', 'url' => $url . 'display_drug', 'icon' => 'glass ', 'active' => ''],
            19 => ['title' => 'Add Needed Drug', 'url' => $url . 'display_need', 'icon' => 'glass ', 'active' => ''],
            20 => ['title' => 'Add Fluid Chart', 'url' => $url . 'display_fluid', 'icon' => 'glass ', 'active' => ''],
            21 => ['title' => 'Add Before Skin Incision', 'url' => $url . 'get_time_out', 'icon' => 'glass ', 'active' => ''],
            22 => ['title' => 'Show All Before Skin Incision', 'url' => $url . 'display_time_out', 'icon' => 'glass ', 'active' => ''],
            23 => ['title' => 'Add Before Induction anaesthsia', 'url' => $url . 'get_sign_in', 'icon' => 'glass ', 'active' => ''],
            24 => ['title' => 'Show All Before Induction anaesthsia', 'url' => $url . 'display_sign_in', 'icon' => 'glass ', 'active' => ''],
            25 => ['title' => 'Add Before Patient leavs operating room', 'url' => $url . 'get_sign_out', 'icon' => 'glass ', 'active' => ''],
            26 => ['title' => 'Show All Before Patient leavs operating room', 'url' => $url . 'display_sign_out', 'icon' => 'glass ', 'active' => ''],
        ];
        $this->load->view('layout/menu', $data);
    }

//tabel nur_notes
    public function get_user() {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $row = $this->nurse_model->get_contact();
        $this->load->view('nurse/add_notes', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_notes() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');
        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('nurse_model');
            $this->nurse_model->add_notes();
            $this->load->view('nurse/add_notes');
            redirect('nurse_control/get_user');
        } else {
            echo validation_errors();
        }
    }

    public function display($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/nurse_control/display/';
        $config['total_rows'] = $this->nurse_model->Count();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->nurse_model->getpationt(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('nurse/view_notes', $data);
    }

    public function removecontact($id) {
        $this->load->model('my_model');
        $this->my_model->remove($id);
    }

    public function ContactDetails($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $data['contact'] = $this->nurse_model->getContactByID($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('nurse/show_notes', $data);
    }

    public function search() {

        $this->load->view('header');
        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search();
        $this->load->view('dr/search', $data);
    }

// tabel nur_pain
    public function get_pain() {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $row = $this->nurse_model->get_contact();
        $this->load->view('nurse/add_pain', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_pain() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');

        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('nurse_model');
            $this->nurse_model->add_pain();
            $this->load->view('nurse/add_pain');
            redirect('nurse_control/get_pain');
        } else {
            echo validation_errors();
        }
    }

    public function display_pain($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/nurse_control/display_pain/';
        $config['total_rows'] = $this->nurse_model->Count_pain();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->nurse_model->getpain(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('nurse/view_pain', $data);
    }

    public function removepain($id) {
        $this->load->model('my_model');
        $this->my_model->remove($id);
    }

    public function paintDetails($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $data['contact'] = $this->nurse_model->getpainByID($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('nurse/show_pain', $data);
    }

    public function search_pain() {

        $this->load->view('header');
        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search();
        $this->load->view('dr/search', $data);
        $this->load->view('footer');
    }

    // nur_asses
    public function get_asses() {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $row = $this->nurse_model->get_assesment();
        $this->load->view('nurse/add_assesment', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_asses() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('nurse_model');
            $this->nurse_model->add_asses();
            $this->load->view('nurse/add_assesment');
            redirect('nurse_control/get_asses');
        } else {
            echo validation_errors();
        }
    }

    public function display_asses($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/nurse_control/display_asses/';
        $config['total_rows'] = $this->nurse_model->Count_asses();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->nurse_model->get_asses(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('nurse/view_assesment', $data);
    }

    public function removeasses($id) {
        $this->load->model('my_model');
        $this->my_model->remove($id);
    }

    public function asses_Details($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $data['contact'] = $this->nurse_model->getassesByID($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('nurse/show_assesment', $data);
    }

    public function search_asses() {

        $this->load->view('header');
        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search_asses();
        $this->load->view('dr/search', $data);
        $this->load->view('footer');
    }

// tabel nur_vital
    public function get_virtal() {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $row = $this->nurse_model->get_virtal();
        $this->load->view('nurse/add_virtal_signs', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_virtal() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('nurse_model');
            $this->nurse_model->add_virtal();
            $this->load->view('nurse/add_virtal_signs');
            redirect('nurse_control/get_virtal');
        } else {
            echo validation_errors();
        }
    }

    public function display_virtal($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/nurse_control/display_virtal/';
        $config['total_rows'] = $this->nurse_model->Count_virtal();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->nurse_model->get_virtall(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('nurse/view_virtal_signs', $data);
    }

    public function removevirtal($id) {
        $this->load->model('my_model');
        $this->my_model->remove($id);
    }

    public function virtal_Details($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $data['contact'] = $this->nurse_model->getvirtalByID($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('nurse/show_virtal_signs', $data);
    }

    public function search_vital() {
        $this->load->view('layout/style');

        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search_vital();
        $this->load->view('dr/search', $data);
    }

    // tabel nur_sheet
    public function get_sheet() {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $row = $this->nurse_model->get_sheet();
        $this->load->view('nurse/add_diabetic_sheet', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_sheet() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('nurse_model');
            $this->nurse_model->add_sheet();
            $this->load->view('nurse/add_diabetic_sheet');
            redirect('nurse_control/get_sheet');
        } else {
            echo validation_errors();
        }
    }

    public function display_sheet($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/nurse_control/display_sheet/';
        $config['total_rows'] = $this->nurse_model->Count_sheet();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->nurse_model->getsheet(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('nurse/view_diabetic_sheet', $data);
    }

    public function removesheet($id) {
        $this->load->model('my_model');
        $this->my_model->remove($id);
    }

    public function sheetDetails($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $data['contact'] = $this->nurse_model->getsheetByID($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('nurse/show_diabetic_sheet', $data);
    }

    public function search_sheet() {

        $this->load->view('header');
        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search();
        $this->load->view('dr/search', $data);
        $this->load->view('footer');
    }

// tabel nur_care
    public function get_care() {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $row = $this->nurse_model->get_care();
        $this->load->view('nurse/add_care_palne', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_care() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('nurse_model');
            $this->nurse_model->add_care();
            $this->load->view('nurse/add_care_palne');
            redirect('nurse_control/get_care');
        } else {
            echo validation_errors();
        }
    }

    public function display_care($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/nurse_control/display_care/';
        $config['total_rows'] = $this->nurse_model->Count_care();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->nurse_model->getcare(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('nurse/view_care_palne', $data);
    }

    public function removecare($id) {
        $this->load->model('my_model');
        $this->my_model->remove($id);
    }

    public function careDetails($id, $start = 0) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $data['contact'] = $this->nurse_model->getcareByID($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/nurse_control/careDetails/';
        $config['total_rows'] = $this->nurse_model->Count_eva();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->nurse_model->getev(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('nurse/show_care_palne', $data);
    }

    public function search_care() {

        $this->load->view('header');
        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search();
        $this->load->view('dr/search', $data);
        $this->load->view('footer');
    }

    // nur_eva
    public function get_eva($id) {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $row['id'] = $id;
        $this->load->view('nurse/add_evaluation', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_eva($id) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('nurse_model');
            $this->nurse_model->add_eva($id);
            $this->load->view('nurse/add_eva');
            redirect('nurse_control/add_evaluation');
        } else {
            echo validation_errors();
        }
    }

// mohamed
    public function PutChartDay($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('PutChartDay');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/nurse_control/PutChartDay/';
        $config['total_rows'] = $this->PutChartDay->Count();
        $config['per_page'] = 5;
        $this->pagination->initialize($config);
        $data['All'] = $this->PutChartDay->GetPagination(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('nurse/PutChartDay', $data);
    }

    public function AddPutChartDay() {
        $this->load->view('layout/style');
        $this->load->view('nurse/inc/AddPutChartDay');
        $this->load->view('layout/Check');
    }

    public function CreatePutChartDay() {
        $mrn = $this->input->post('MRN');
        $date = $this->input->post('date');
        $this->load->model('PutChartDay');
        $check = $this->PutChartDay->check($mrn, $date);
        if ($check == 0) {
            $add = $this->PutChartDay->Create();
            if ($add) {
                $this->session->set_flashdata('done', 'Your User added');
                redirect('nurse_control/PutChartDay/');
            } else {
                $this->session->set_flashdata('error', 'Error');
                redirect($this->back);
            }
        } else {
            $this->session->set_flashdata('error', 'Error');
            redirect($this->back);
        }
    }

    public function FindPutChartDay($id) {
        $this->load->view('layout/style');
        $this->load->model('OutInPutChart');
        $this->load->model('Admission');
        $data['day'] = $this->OutInPutChart->FindDay($id);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['day']->id);
        $data['All'] = $this->OutInPutChart->FindAll($id);
        $this->load->view('nurse/OutInPutChart', $data);
    }

    public function AddPutChart($id) {
        $this->load->model('PutChartDay');
        $this->load->view('layout/style');
        $this->load->model('Admission');
        $this->load->model('OutInPutChart');
        $data['day'] = $this->OutInPutChart->FindDay($id);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['day']->id);
        $this->load->view('nurse/inc/AddPutChart', $data);
    }

    public function CreatePutChart($id) {
        $this->load->model('OutInPutChart');
        $add = $this->OutInPutChart->Create($id);
        if ($add) {
            $this->session->set_flashdata('done', 'Your User added');
            redirect('nurse_control/FindPutChartDay/' . $id);
        } else {
            $this->session->set_flashdata('error', 'Error');
            redirect($this->back);
        }
    }

    // tabel nur_voise
    public function get_voise() {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $row = $this->nurse_model->get_voise();
        $this->load->view('nurse/add_voise_order', $row);
        $this->load->view('layout/Check', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_voise() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nurse', 'nurse', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('nurse_model');
            $this->nurse_model->add_voise();
            $this->load->view('nurse/add_voise_order');
            redirect('nurse_control/get_voise');
        } else {
            echo validation_errors();
        }
    }

    public function display_voise($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/nurse_control/display_voise/';
        $config['total_rows'] = $this->nurse_model->Count_care();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->nurse_model->getvoise(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('nurse/view_voise_order', $data);
    }

    public function removevoise($id) {
        $this->load->model('my_model');
        $this->my_model->remove($id);
    }

    public function voise_Details($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $data['contact'] = $this->nurse_model->getvoiseByID($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('nurse/show_voise_order', $data);
    }

    public function search_voise() {

        $this->load->view('header');
        $this->load->model('nurse_model');
        $data['contacts'] = $this->nurse_model->search();
        $this->load->view('dr/search', $data);
        $this->load->view('footer');
    }

    // nur_drug
    public function get_drug($id) {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $row['id'] = $id;
        $this->load->view('nurse/add_pationt_drug', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_drug($id) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');

        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('nurse_model');
            $this->nurse_model->add_drug($id);
            $this->load->view('nurse/add_pationt_drug');
            redirect('nurse_control/get_drug/' . $id);
        } else {
            echo validation_errors();
        }
    }

    public function display_drug($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/nur_control/display/';
        $config['total_rows'] = $this->nurse_model->Count_drug();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->nurse_model->getdrug(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('nurse/view_pationt_drug', $data);
    }

    public function drugDetails($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $data['contact'] = $this->nurse_model->getdrugByID($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('nurse/show_pationt_drug', $data);
    }

    public function search_drug() {

        $this->load->view('header');
        $this->load->model('nurse_model');
        $data['contacts'] = $this->nurse_model->search();
        $this->load->view('dr/search', $data);
        $this->load->view('footer');
    }

    // tabel nur_need
    public function get_need() {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $row = $this->nurse_model->get_need();
        $this->load->view('nurse/add_drug', $row);
        $this->load->view('layout/Check');
        $this->load->view('layout/Check', $row);
    }

    public function add_need() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');

        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('nurse_model');
            $this->nurse_model->add_need();
            $this->load->view('nurse/add_drug');
            redirect('nurse_control/get_need');
        } else {
            echo validation_errors();
        }
    }

    public function display_need($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/nurse_control/display_need/';
        $config['total_rows'] = $this->dr_model->Count_need();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->dr_model->getneed(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('nurse/view_drug', $data);
    }

    public function ContactDetails_need($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('dr_model');
        $data['contact'] = $this->dr_model->getContactByneed($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('nurse/show_drug', $data);
    }

    // tabel nur_fluid

    public function get_fluid($id) {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $row['id'] = $id;
        $this->load->view('nurse/add_fluid', $row);
        $this->load->view('layout/Check', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_fluid($id) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');

        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('nurse_model');
            $this->nurse_model->add_fluid($id);
            $this->load->view('nurse/add_fluid');
            redirect('nurse_control/get_fluid/' . $id);
        } else {
            echo validation_errors();
        }
    }

    public function display_fluid($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/nurse_control/display_fluid/';
        $config['total_rows'] = $this->nurse_model->Count_fluid();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->nurse_model->getfluid(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('nurse/view_fluid', $data);
    }

    public function ContactDetails_fluid($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $data['contact'] = $this->nurse_model->getContactByfluid($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('nurse/show_fluid', $data);
    }

// tabel nur_time_out
    public function get_time_out() {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $row = $this->nurse_model->get_time_out();
        $this->load->view('nurse/add_time_out', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_time_out() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');
        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('nurse_model');
            $this->nurse_model->add_time_out();
            $this->load->view('nurse/add_time_out');
            redirect('nurse_control/get_time_out');
        } else {
            echo validation_errors();
        }
    }

    public function display_time_out($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/nurse_control/display_time_out/';
        $config['total_rows'] = $this->nurse_model->Count_time_out();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->nurse_model->getpationt_time_out(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('nurse/view_time_out', $data);
    }

    public function ContactDetails_time_out($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $data['contact'] = $this->nurse_model->getContactByID_time_out($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('nurse/show_time_out', $data);
    }

    public function search_time_out() {

        $this->load->view('header');
        $this->load->model('dr_model');
        $data['contacts'] = $this->nurse_model->search();
        $this->load->view('dr/search', $data);
    }

    // tabel _nur_sign_in
    public function get_sign_in() {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $row = $this->nurse_model->get_sign_in();
        $this->load->view('nurse/add_sign_in', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_sign_in() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');
        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('nurse_model');
            $this->nurse_model->add_sign_in();
            $this->load->view('nurse/add_sign_in');
            redirect('nurse_control/get_sign_in');
        } else {
            echo validation_errors();
        }
    }

    public function display_sign_in($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/nurse_control/display_sign_in/';
        $config['total_rows'] = $this->nurse_model->Count_sign_in();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->nurse_model->getpationt_sign_in(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('nurse/view_sign_in', $data);
    }

    public function ContactDetails_sign_in($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $data['contact'] = $this->nurse_model->getContactByID_sign_in($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('nurse/show_sign_in', $data);
    }

    public function search_sign_in() {

        $this->load->view('header');
        $this->load->model('dr_model');
        $data['contacts'] = $this->nurse_model->search();
        $this->load->view('dr/search', $data);
    }

    // tabel nur_sign_out
    public function get_sign_out() {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $row = $this->nurse_model->get_sign_out();
        $this->load->view('nurse/add_sign_out', $row);
        $this->load->view('layout/Check', $row);
    }

    public function add_sign_out() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');
        $this->form_validation->set_rules('sign', 'sign', 'xss_clean|required');
        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('nurse_model');
            $this->nurse_model->add_sign_out();
            $this->load->view('nurse/add_sign_out');
            redirect('nurse_control/get_sign_out');
        } else {
            echo validation_errors();
        }
    }

    public function display_sign_out($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/nurse_control/display_sign_out/';
        $config['total_rows'] = $this->nurse_model->Count_sign_out();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->nurse_model->getpationt_sign_out(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('nurse/view_sign_out', $data);
    }

    public function ContactDetails_sign_out($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('nurse_model');
        $data['contact'] = $this->nurse_model->getContactByID_sign_out($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('nurse/show_sign_out', $data);
    }

    public function search_sign_out() {

        $this->load->view('header');
        $this->load->model('dr_model');
        $data['contacts'] = $this->nurse_model->search();
        $this->load->view('dr/search', $data);
    }

}

?>