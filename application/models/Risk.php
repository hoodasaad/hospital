<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 4/21/2015
 * Time: 12:31 PM
 */

class Risk extends CI_Model  {
    private $table = 'doc_risk';

    public function __construct(){

    }

    public function Create(){
        $data = [
               'mrn' => $this->input->post('mrn'),
              'user_id' => $this->session->userdata('UserId'),
              'high' => $this->input->post('high'),
              'low' => $this->input->post('low'),
              'age' => $this->input->post('age'),
              'age_point' => $this->input->post('age_point'),
              'history' => $this->input->post('history'),
              'history_point' => $this->input->post('history_point'),
              'bowel' => $this->input->post('bowel'),
              'bowel_point' => $this->input->post('bowel_point'),
              'medication' => $this->input->post('medication'),
              'medication_point' => $this->input->post('medication_point'),
              'care' => $this->input->post('care'),
              'care_point' => $this->input->post('care_point'),
              'mobility' => implode(',',$this->input->post('mobility')),
              'mobility_point' =>$this->input->post('mobility_point'),
              'cogntion' => implode(',',$this->input->post('cogntion')),
              'cogntion_point' => $this->input->post('cogntion_point'),
              'total' => $this->input->post('Total'),
              'dr_sign' => $this->input->post('sign'),
              'created_at' => $this->input->post('time')
        ];
        return $this->db->insert($this->table, $data);
    }

    public function Find($id){
        $query = $this->db->get_where($this->table, ['id' => $id]);
        return @$query->result()[0];
    }

    public function Count() {
        return $this->db->count_all($this->table);
    }

    public function GetPagination($limit, $start) {
        $this->db->select($this->table.'.*');
        $this->db->select('patient.name, patient.pt_id,');
        $this->db->from($this->table);
        $this->db->join('patient','patient.id = doc_risk.mrn');
        $this->db->limit($limit, $start);
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
    }

}