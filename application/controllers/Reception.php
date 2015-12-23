<?php

/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 4/26/2015
 * Time: 11:31 AM
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Reception extends CI_Controller {

    private $data;
    private $back;

    function __construct() {
        $this->back = @$_SERVER['HTTP_REFERER'];
        parent::__construct();
        $this->load->model('User');
        $this->load->model('Patient');
        $this->load->model('Admission');
        if (!$this->session->userdata('UserId')) {
            redirect('/');
        } else {
            $access = $this->User->GetAccess($this->session->userdata('RoleId'));
            if ($access != 'Reception') {
                redirect($access);
            }
        }
    }

    public function index() {
        $this->data['UserInfo'] = $this->User->Find($this->session->userdata('UserId'));
        $this->data['title'] = 'Reception';
        $this->data['Url'] = 'Reception';
        $this->load->view('layout/head', $this->data);
        $this->load->view('layout/header', $this->data);
        $this->Menu();
        $this->load->view('layout/frame_load');
        $this->load->view('layout/footer');
    }

    public function Home() {
        $this->load->view('layout/style');
        $this->load->view('rec/home');
    }

    public function GetAll($start = 0) {
        $this->load->view('layout/style');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/Reception/GetAll/';
        $config['total_rows'] = $this->Patient->Count();
        $config['per_page'] = 5;
        $this->pagination->initialize($config);
        $data['All'] = $this->Patient->GetPagination(5, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('rec/AllPatient', $data);
    }

    public function AddNewPatient() {
        $this->load->view('layout/style');
        $this->load->view('rec/inc/AddNewPatient');
    }

    public function CreatePatient() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required|xss_clean');

        if ($this->form_validation->run()) {
            $add = $this->Patient->Create();
            if ($add) {
                $this->session->set_flashdata('done', 'Your User added');
                redirect('Reception/GetAll/');
            } else {
                $this->session->set_flashdata('error', validation_errors());
                redirect($this->back);
            }
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect($this->back);
        }
    }

    public function FindPatient($id) {
        $this->load->view('layout/style');
        $data['patient'] = $this->Patient->Find($id);
        $this->load->view('rec/inc/FindPatient', $data);
    }

    public function Admission($id, $start = 0) {
        $this->load->view('layout/style');
        $data['patient'] = $this->Patient->Find($id);
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/Reception/GetAll/';
        $config['total_rows'] = $this->Admission->Count();
        $config['per_page'] = 5;
        $this->pagination->initialize($config);
        $data['All'] = $this->Admission->GetPagination($id, 5, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('rec/Admission', $data);
    }

    public function AddAdmission($id) {
        $this->load->view('layout/style');
        $data['patient'] = $id;
        $this->load->view('rec/inc/AddAdmission', $data);
    }

    public function CreateAdmission($id) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('date_time', 'Admission Date', 'required|xss_clean');

        if ($this->form_validation->run()) {
            $add = $this->Admission->Create($id);
            if ($add) {
                $this->session->set_flashdata('done', 'Your User added');
                redirect('Reception/Admission/' . $id);
            } else {
                $this->session->set_flashdata('error', validation_errors());
                redirect($this->back);
            }
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect($this->back);
        }
    }

    public function FindAdmission($id) {
        $this->load->view('layout/style');
        $data['patient'] = $this->Admission->Find($id);
        $data['patient2'] = $this->Patient->Find($data['patient']->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['patient']->mrn);
        $this->load->view('rec/inc/FindAdmission', $data);
    }

    private function Menu() {
        $url = base_url() . 'index.php/Reception/';
        $data['menu'] = [
            0 => ['title' => 'Home', 'url' => $url . 'Home', 'icon' => 'home', 'active' => 'active'],
            1 => ['title' => 'Add New Patient', 'url' => $url . 'AddNewPatient', 'icon' => 'user', 'active' => ''],
            2 => ['title' => 'Show All Patient', 'url' => $url . 'GetAll', 'icon' => 'eye-open ', 'active' => ''],
            3 => ['title' => 'Add New  Release of medical information', 'url' => $url . 'get_release', 'icon' => 'eye-open ', 'active' => ''],
            4 => ['title' => 'Show  Release of medical information', 'url' => $url . 'display_release', 'icon' => 'eye-open ', 'active' => ''],
            5 => ['title' => 'Add  Release of medical information (2)', 'url' => $url . 'get_info', 'icon' => 'eye-open ', 'active' => ''],
            6 => ['title' => 'Show  Release of medical information(2)', 'url' => $url . 'display_info', 'icon' => 'eye-open ', 'active' => ''],
        ];

        $this->load->view('layout/menu', $data);
    }

    // res_release

    public function get_release() {
        $this->load->view('layout/style');
        $this->load->model('res_model');
        $row = $this->res_model->get_release();
        $this->load->view('rec/add_release');
        $this->load->view('layout/Check', $row);
    }

    public function add_release() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');

        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('res_model');
            $this->res_model->add_release();
            $this->load->view('rec/add_release');
            redirect('Reception/get_release');
        } else {
            echo validation_errors();
        }
    }

    public function display_release($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('res_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/Reception/display_release/';
        $config['total_rows'] = $this->res_model->Count_release();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->res_model->getrelease(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('rec/view_release', $data);
    }

    public function ContactDetails_release($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('res_model');
        $data['contact'] = $this->res_model->getContactByrelease($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('rec/show_release', $data);
    }

    public function search_release() {

        $this->load->view('header');
        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search();
        $this->load->view('dr/search', $data);
        $this->load->view('footer');
    }

    // tabel res_info
    public function get_info() {
        $this->load->view('layout/style');
        $this->load->model('res_model');
        $row = $this->res_model->get_info();
        $this->load->view('rec/add_info');
        $this->load->view('layout/Check', $row);
    }

    public function add_info() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mrn', 'mrn', 'xss_clean|required|integer');

        $this->form_validation->set_rules('time', 'time', 'xss_clean|required');

        if ($this->form_validation->run()) {
            $this->load->model('res_model');
            $this->res_model->add_info();
            $this->load->view('rec/add_info');
            redirect('Reception/get_info');
        } else {
            echo validation_errors();
        }
    }

    public function display_info($start = 0) {
        $this->load->view('layout/style');
        $this->load->model('res_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/Reception/display_info/';
        $config['total_rows'] = $this->res_model->Count_info();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->res_model->getinfo(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('rec/view_info', $data);
    }

    public function ContactDetails_info($id) {
        $this->load->model('Patient');
        $this->load->model('Admission');
        $this->load->view('layout/style');
        $this->load->model('res_model');
        $data['contact'] = $this->res_model->getContactByinfo($id);
        $data['patient'] = $this->Patient->Find($data['contact'][0]->mrn);
        $data['diagnosis'] = $this->Admission->LastAdmission($data['contact'][0]->mrn);
        $this->load->view('rec/show_info', $data);
    }

    public function search_info() {

        $this->load->view('header');
        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search();
        $this->load->view('dr/search', $data);
        $this->load->view('footer');
    }

}
