<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 4/21/2015
 * Time: 12:31 PM
 */

class Admission extends CI_Model  {
    private $table = 'admission';

    public function __construct(){

    }

    public function Create($id){
        $data = [
              'mrn' => $id,
              'user_id' => $this->session->userdata('UserId'),
              'date_time' => $this->input->post('date_time'),
              'admission_before' => $this->input->post('admission_before'),
              'word' => $this->input->post('word'),
              'class' => $this->input->post('class'),
              'room' => $this->input->post('room'),
              'referral_from' => $this->input->post('referral_from'),
              'financial_status' => $this->input->post('financial_status'),
              'consultant' => $this->input->post('consultant'),
              'provisional_diagnosis' => $this->input->post('provisional_diagnosis'),
              'icd_10' => $this->input->post('icd_10'),
              'expected_days' => $this->input->post('expected_days'),
              'created_at' => date("Y-m-d H:i:s")
        ];
        return $this->db->insert($this->table, $data);
    }

    public function Find($id){
        $query = $this->db->get_where($this->table, ['id' => $id]);
        return @$query->result()[0];
    }

    public function LastAdmission($mrn){
        $this->db->select("provisional_diagnosis as diagnosis");
        $this->db->limit(1, 0);
        $this->db->order_by("id", "desc");
        $query = $this->db->get_where($this->table, ['mrn' => $mrn]);
        return @$query->result()[0];
    }

    public function Count() {
        return $this->db->count_all($this->table);
    }

    public function GetPagination($id,$limit, $start) {
        $this->db->where('mrn',$id);
        $this->db->limit($limit, $start);
        $this->db->order_by("id", "desc");
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public static function Gender(){
        return [
            1 => 'Male',
            2 => 'Female',
        ];
    }

    public static function YesORNo(){
        return [
            0 => 'No',
            1 => 'Yes'
        ];
    }

    public static function Referral(){
        return [
            1 => 'ER',
            2 => 'OPD',
            3 => 'SP. Case',
        ];
    }

    public static function Financial(){
        return [
            1 => 'Cash',
            2 => 'Insurance',
        ];
    }

}