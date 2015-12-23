<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dr_control extends CI_Controller {

//tabel doc_drug
    public function get_user() {
        $this->load->view('header');
        $this->load->model('dr_model');
        $row = $this->dr_model->get_contact();
        $this->load->view('dr/add_pationt_drug', $row);
        $this->load->view('footer');
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
        $this->load->view('header');
        $this->load->model('dr_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/display/';
        $config['total_rows'] = $this->dr_model->Count();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->dr_model->getpationt(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/view_pationt_drug', $data);
        $this->load->view('footer');
    }

    public function removecontact($id) {
        $this->load->model('my_model');
        $this->my_model->remove($id);
    }

    public function ContactDetails($id) {
        $this->load->view('header');

        $this->load->model('dr_model');
        $data['contact'] = $this->dr_model->getContactByID($id);
        $this->load->view('dr/show_pationt_drug', $data);
        $this->load->view('footer');
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
        $this->load->view('header');
        $this->load->model('dr_model');
        $row = $this->dr_model->get_order();
        $this->load->view('dr/add_dr_order', $row);
        $this->load->view('footer');
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
            redirect('dr_control/get_user');
        } else {
            echo validation_errors();
        }
    }

    public function display_order($start = 0) {
        $this->load->view('header');
        $this->load->model('dr_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/display_order/';
        $config['total_rows'] = $this->dr_model->Count_order();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->dr_model->get_orders(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/view_dr_order', $data);
        $this->load->view('footer');
    }

    public function order_Details($id) {
        $this->load->view('header');

        $this->load->model('dr_model');
        $data['contact'] = $this->dr_model->getContactByorder($id);
        $this->load->view('dr/show_dr_order', $data);
        $this->load->view('footer');
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
        $this->load->view('header');
        $this->load->model('dr_model');
        $row = $this->dr_model->get_nu();
        $this->load->view('dr/add_nut', $row);
        $this->load->view('footer');
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
        $this->load->view('header');
        $this->load->model('dr_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/display_nu/';
        $config['total_rows'] = $this->dr_model->Count_nu();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->dr_model->get_nus(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/view_nut', $data);
        $this->load->view('footer');
    }

    public function ContactDetails_nu($id) {
        $this->load->view('header');

        $this->load->model('dr_model');
        $data['contact'] = $this->dr_model->getContactBynu($id);
        $this->load->view('dr/show_nut', $data);
        $this->load->view('footer');
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
        $this->load->view('header');
        $this->load->model('dr_model');
        $row = $this->dr_model->get_req();
        $this->load->view('dr/add_cons', $row);
        $this->load->view('footer');
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
        $this->load->view('header');
        $this->load->model('dr_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/display_req/';
        $config['total_rows'] = $this->dr_model->Count_req();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->dr_model->get_reqe(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/view_cons', $data);
        $this->load->view('footer');
    }

    public function ContactDetails_req($id) {
        $this->load->view('header');

        $this->load->model('dr_model');
        $data['contact'] = $this->dr_model->getContactByreq($id);
        $this->load->view('dr/show_cons', $data);
        $this->load->view('footer');
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
        $this->load->view('header');
        $this->load->model('dr_model');
        $row = $this->dr_model->get_prog();
        $this->load->view('dr/add_prog', $row);
        $this->load->view('footer');
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
        $this->load->view('header');
        $this->load->model('dr_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/display_prog/';
        $config['total_rows'] = $this->dr_model->Count_prog();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->dr_model->get_progr(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/view_prog', $data);
        $this->load->view('footer');
    }

    public function ContactDetails_prog($id) {
        $this->load->view('header');

        $this->load->model('dr_model');
        $data['contact'] = $this->dr_model->getContactByprog($id);
        $this->load->view('dr/show_prog', $data);
        $this->load->view('footer');
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
        $this->load->view('header');
        $this->load->model('dr_model');
        $row = $this->dr_model->get_rel();
        $this->load->view('dr/add_patient_relative', $row);
        $this->load->view('footer');
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
        $this->load->view('header');
        $this->load->model('dr_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/dr_control/display_rel/';
        $config['total_rows'] = $this->dr_model->Count_rel();
        $config['per_page'] = 5;

        $this->pagination->initialize($config);
        $data['phone'] = $this->dr_model->get_rel(12, $start);
        $data['links'] = $this->pagination->create_links();
        $this->load->view('dr/view_patient_relative', $data);
        $this->load->view('footer');
    }

    public function ContactDetails_rel($id) {
        $this->load->view('header');

        $this->load->model('dr_model');
        $data['contact'] = $this->dr_model->getContactByrel($id);
        $this->load->view('dr/show_patient_relative', $data);
        $this->load->view('footer');
    }

    public function search_rel() {

        $this->load->view('header');
        $this->load->model('dr_model');
        $data['contacts'] = $this->dr_model->search_rel();
        $this->load->view('dr/search', $data);
        $this->load->view('footer');
    }

}

?>