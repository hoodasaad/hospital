<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 4/21/2015
 * Time: 12:31 PM
 */

class PutChartDay extends CI_Model  {
    private $table = 'put_chart_day';

    public function __construct(){

    }

    public function Create(){
        $data = [
               'mrn' => $this->input->post('MRN'),
              'user_id' => $this->session->userdata('UserId'),
              'date' => $this->input->post('date'),
              'created_at' => date("Y-m-d H:i:s")
        ];
        return $this->db->insert($this->table, $data);
    }

    public function Find($id){
        $query = $this->db->get_where($this->table, ['id' => $id]);
        return @$query->result()[0];
    }

    public function Check($mrn,$day){
        $query = $this->db->get_where($this->table, ['mrn' => $mrn,'date'=>$day]);
        return $query->num_rows();
    }

    public function Count() {
        return $this->db->count_all($this->table);
    }

    public function GetPagination($limit, $start) {
        $this->db->select($this->table.'.*');
        $this->db->select('patient.name, patient.pt_id,');
        $this->db->from($this->table);
        $this->db->join('patient','patient.id = '.$this->table.'.mrn');
        $this->db->limit($limit, $start);
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
    }

    public static function BloodComponentType(){
        return [
            1 => 'RBC s',
            2 => 'Fresh Frozen plasma',
            3 => 'Crow Precipitate'
        ];
    }
    public static function SpecificComponentModification(){
        return [
            1 => 'Irradiated',
            2 => 'Packed RBC s',
            3 => 'Filtered'
        ];
    }

    public static function YesORNo(){
    return [
        0 => 'No',
        1 => 'Yes'
    ];
}
    public static function Observation(){
    return [
        0 => 'Nothing',
        1 => 'Rash',
        2 => 'Fever',
        3 => 'Shivering',
        4 => 'Facial edema',
        5 => 'Laryngeal',
        6 => 'Spasm',
    ];
}

}