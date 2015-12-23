<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Res_model extends CI_Model {

    // res_release

    public function get_release() {
        $query = $this->db->get('res_release');
        return $query->result();
    }

    public function add_release($id) {
        $data = array(
            'mrn' => $this->input->post('mrn'),
            'user_id' => $this->session->userdata('UserId'),
            'patient' => $this->input->post('patient'),
            'dob' => $this->input->post('dob'),
            'record' => $this->input->post('record'),
            'doctor' => $this->input->post('doctor'),
            'mental' => $this->input->post('mental'),
            'hiv' => $this->input->post('hiv'),
            'genetic' => $this->input->post('genetic'),
            'drug' => $this->input->post('drug'),
            'p_sign' => $this->input->post('p_sign'),
            'a_sign' => $this->input->post('a_sign'),
            'relation' => $this->input->post('relation'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('res_release', $data);
    }

    public function Count_release() {
        return $this->db->count_all("res_release");
    }

    public function getrelease($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("res_release");
        return $query->result();
    }

    public function getContactByrelease($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("res_release");
        return $query->result();
    }

    public function search_release() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('res_release');
        return $query->result();
    }

// tabel res_info
    public function get_info() {
        $query = $this->db->get('res_info');
        return $query->result();
    }

    public function add_info() {
        $data = array(
            'mrn' => $this->input->post('mrn'),
            'user_id' => $this->session->userdata('UserId'),
            'medical' => $this->input->post('medical'),
            'date' => $this->input->post('date'),
            'practice' => $this->input->post('practice'),
            'physician' => $this->input->post('physician'),
            'fax' => $this->input->post('fax'),
            'address' => $this->input->post('address'),
            'other' => $this->input->post('other'),
            'requesting' => implode(":", $this->input->post('requesting')),
            'patient' => $this->input->post('patient'),
            'first' => $this->input->post('first'),
            'second' => $this->input->post('second'),
            'attention' => $this->input->post('attention'),
            'fax_number' => $this->input->post('fax_number'),
            'mail' => $this->input->post('mail'),
            'phone_number' => $this->input->post('phone_number'),
            'ask' => $this->input->post('ask'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('res_info', $data);
    }

    public function Count_info() {
        return $this->db->count_all("res_info");
    }

    public function getinfo($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("res_info");
        return $query->result();
    }

    public function getContactByinfo($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("res_info");
        return $query->result();
    }

    public function search_info() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('res_info');
        return $query->result();
    }

}
