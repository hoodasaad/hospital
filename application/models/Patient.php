<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 4/21/2015
 * Time: 12:31 PM
 */

class Patient extends CI_Model  {
    private $table = 'patient';

    public function __construct(){

    }

    public function Create(){
        $data = [
              'user_id' => $this->session->userdata('UserId'),
              'date_time' => $this->input->post('date_time'),
              'name' => $this->input->post('name'),
              'age' => $this->input->post('age'),
              'gender' => $this->input->post('gender'),
              'pt_id' => $this->input->post('pt_id'),
              'occupation' => $this->input->post('occupation'),
              'address' => $this->input->post('address'),
              'phone' => $this->input->post('phone'),
              'mobile' => $this->input->post('mobile'),
              'emergency_call_no' => $this->input->post('emergency_call_no'),
              'emergency_call_name' => $this->input->post('emergency_call_name'),
             'active' => 1,
             'created_at' => date("Y-m-d H:i:s")
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
        $this->db->limit($limit, $start);
        $this->db->order_by("id", "desc");
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function CheckMRN($id) {
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->num_rows();
    }

    public function CheckPatientId($id) {
        $this->db->where('pt_id', $id);
        $query = $this->db->get($this->table);
        return $query->num_rows();
    }
    public static function Gender(){
        return [
            1 => 'Male',
            2 => 'Female',
        ];
    }

    static function ageCalculator($dob){
        if(!empty($dob)){
            $birthdate = new DateTime($dob);
            $today   = new DateTime('today');
            $age = $birthdate->diff($today)->y;
            return $age .' Years';
        }else{
            return 0;
        }
    }

}