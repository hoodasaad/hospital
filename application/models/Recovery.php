<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 4/21/2015
 * Time: 12:31 PM
 */

class Recovery extends CI_Model  {
    private $table = 'doc_recovery';

    public function __construct(){

    }

    public function Create(){
        $data = [
               'mrn'        => $this->input->post('MRN'),
              'user_id'     => $this->session->userdata('UserId'),
              'arr_rec'     => $this->input->post('arr_rec'),
            'temp' => implode(',',$this->input->post('temp')),
            'pulse' => implode(',',$this->input->post('pulse')),
            'bl_p' => implode(',',$this->input->post('bl_p')),
            'resp' => implode(',',$this->input->post('resp')),
            'ox_p' => implode(',',$this->input->post('ox_p')),
              'lev_con'    => $this->input->post('lev_con'),
              'tubes'    => $this->input->post('tubes'),
              'wound' => $this->input->post('wound'),
            'type' => implode(',',$this->input->post('type')),
            'dose' => implode(',',$this->input->post('dose')),
            'rate' => implode(',',$this->input->post('rate')),
              'urine' => $this->input->post('urine'),
              'body' => $this->input->post('body'),
              'scale' => $this->input->post('scale'),
              'medication' => $this->input->post('medication'),
              'monitor' => $this->input->post('monitor'),
              'leave_rec' => $this->input->post('leave_rec'),
              'rec_nurse' => $this->input->post('rec_nurse'),
              'doctor' => $this->input->post('doctor'),
              'word_nurse' => $this->input->post('word_nurse'),
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
        $this->db->select($this->table.'.*');
        $this->db->select('patient.name, patient.pt_id,');
        $this->db->from($this->table);
        $this->db->join('patient','patient.id = doc_recovery.mrn');
        $this->db->limit($limit, $start);
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
    }

}