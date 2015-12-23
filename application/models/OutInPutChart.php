<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 4/21/2015
 * Time: 12:31 PM
 */

class OutInPutChart extends CI_Model  {
    private $table = 'out_in_put_chart';

    public function __construct(){

    }

    public function Create($id){
        $data = [
            'put_chart_day_id' => $id,
              'user_id' => $this->session->userdata('UserId'),
              'time' => $this->input->post('time')[0].' '.$this->input->post('time')[1],
              'oral_am' => $this->input->post('oral_am'),
              'oral_ty' => $this->input->post('oral_ty'),
               'i_v_am' => $this->input->post('i_v_am'),
              'i_v_ty' => $this->input->post('i_v_ty'),
                'n_gtube_am' => $this->input->post('n_gtube_am'),
              'n_gtube_ty' => $this->input->post('n_gtube_ty'),
               'urin_am' => $this->input->post('urin_am'),
              'urin_ty' => $this->input->post('urin_ty'),
                'n_g_tube_am' => $this->input->post('n_g_tube_am'),
              'n_g_tube_ty' => $this->input->post('n_g_tube_ty'),
            'other_am' => $this->input->post('other_am'),
              'other_ty' => $this->input->post('other_ty'),
              'nurse_sign' => $this->input->post('nurse_sign'),
            'created_at' => date("Y-m-d H:i:s")
        ];
        return $this->db->insert($this->table, $data);
    }

    public function Find($id){
        $query = $this->db->get_where($this->table, ['id' => $id]);
        return @$query->result()[0];
    }

    public function FindAll($id){
        $query = $this->db->get_where($this->table, ['put_chart_day_id' => $id]);
        return @$query->result();
    }

    public function FindDay($id){
        $this->db->select('put_chart_day.date,put_chart_day.mrn');
        $this->db->from('put_chart_day');
        $this->db->select('patient.*');
        $this->db->where('put_chart_day.id',$id);
        $this->db->join('patient','patient.id = put_chart_day.mrn');
        $query = $this->db->get();
        return $query->result()[0];
    }

    public function Count() {
        return $this->db->count_all($this->table);
    }

    public function GetPagination($limit, $start) {
        $this->db->select($this->table.'.*');
        $this->db->select('patient.name, patient.pt_id,');
        $this->db->from($this->table);
        $this->db->join('patient','patient.id = out_in_put_chart.mrn');
        $this->db->limit($limit, $start);
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
    }

}