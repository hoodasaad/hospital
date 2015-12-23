<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Clinc_model extends CI_Model {

    public function get_contact() {
        $query = $this->db->get('res');
        return $query->result();
    }

    public function add() {
        $data['user_id'] = $this->session->userdata('UserId');
        $data['first'] = $this->input->post('first');
        $data['second'] = $this->input->post('second');
        $data['third'] = $this->input->post('third');
        $data['last'] = $this->input->post('last');
        $data['pationt_id'] = $this->input->post('pationt_id');
        $data['clinc'] = $this->input->post('clinc');
        $data['number'] = $this->input->post('number');
        $data['phone'] = $this->input->post('phone');
        $data['provider'] = $this->input->post('provider');
        $data['seen'] = $this->input->post('seen');
        $data['doctor'] = $this->input->post('doctor');
        $data['time'] = $this->input->post('time');
        $data['full_name'] = $data['first'] . " " . $data['second'] . " " . $data['third'] . " " . $data['last'];

        $this->db->insert('res', $data);
    }

    public function Count() {
        return $this->db->count_all("res");
    }

    public function getpationt($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("res");
        return $query->result();
    }

    public function remove($id) {
        $this->db->delete('test', array("id" => $id));
    }

    public function update_post($id, $data) {
        $this->db->get('res');
        $this->db->where('id', $id);
        $this->db->update('res', $data);
    }

    public function getContactByID($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("res");
        return $query->result();
    }

    public function check() {
        $this->db->where('full_name', $full_name);
        $query = $this->db->get('res');
        return $row;
    }

    public function search() {
        $match = $this->input->get('search');
        $this->db->like('id', $match);
        $this->db->or_like('full_name', $match);
        $this->db->or_like('pationt_id', $match);
        $query = $this->db->get('res');
        return $query->result();
    }

    public function CheckMRN($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('res');
        return $query->num_rows();
    }

    public function CheckPationtId($id) {
        $this->db->where('pationt_id', $id);
        $query = $this->db->get('res');
        return $query->num_rows();
    }

    public function CheckPhone($id) {
        $this->db->where('phone', $id);
        $query = $this->db->get('res');
        return $query->num_rows();
    }

}

?>