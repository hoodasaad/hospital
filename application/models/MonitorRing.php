<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 4/21/2015
 * Time: 12:31 PM
 */

class MonitorRing extends CI_Model  {
    private $table = 'monitor_ring';

    public function __construct(){

    }

    public function Create(){
        $data = [
               'blood_trams_fusion_id' => $this->input->post('blood_trams_fusion_id'),
              'time' => $this->input->post('time'),
              'temp' => $this->input->post('temp'),
              'pulse' => $this->input->post('pulse'),
              'b_l_p' => $this->input->post('b_l_p'),
              'resp' => $this->input->post('resp'),
              'sign' => $this->input->post('sign'),
              'created_at' => time()
        ];
        return $this->db->insert($this->table, $data);
    }

    public function Find($id){
        $query = $this->db->get_where($this->table, ['id' => $id]);
        return @$query->result()[0];
    }
    public function FindBloodRequest($id){
        $query = $this->db->get_where('blood_trams_fusion', ['id' => $id]);
        return @$query->result()[0];
    }

    public function Count() {
        return $this->db->count_all($this->table);
    }

    function GetAll($id) {
        $this->db->where('blood_trams_fusion_id',$id);
        $this->db->order_by('time', 'ASC');
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public static function Time(){
        return [
            1 => 'Before administration',
            2 => 'After 5 min',
            3 => 'After 15 min',
            4 => 'end of Trams Fusion'
        ];
    }

}