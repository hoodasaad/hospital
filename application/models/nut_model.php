<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Nut_model extends CI_Model {

    public function C_get_contact() {
        $query = $this->db->get('nutration');
        return $query->result();
    }

    public function C_add($id) {
        $data = array(
            'doc_nu_id' => $id,
            'user_id' => $this->session->userdata('UserId'),
            'comment' => $this->input->post('comment'),
            'notes' => $this->input->post('notes'),
            'chy' => $this->input->post('chy'),
            'teeth' => $this->input->post('teeth'),
            'time' => $this->input->post('time'),
            'sign' => $this->input->post('sign'),
        );
        $this->db->insert('nutration', $data);
    }

    public function C_Count() {
        return $this->db->count_all("doc_nu");
    }

    public function C_getpationt($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("doc_nu");
        return $query->result();
    }

    public function C_getContactByID() {
        $this->db->where('id');
        $query = $this->db->get("doc_nu");
        return $query->result();
    }

    public function C_search() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('doc_nu');
        return $query->result();
    }

    //doc_nu
   


}
