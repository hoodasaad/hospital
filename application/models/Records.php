<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 4/21/2015
 * Time: 12:31 PM
 */

class Records extends CI_Model  {
    private $table = 'doc_records';

    public function __construct(){

    }

    public function Create(){
        $data = [
               'mrn'        => $this->input->post('MRN'),
              'user_id'     => $this->session->userdata('UserId'),
              'sur_pro'     => $this->input->post('sur_pro'),
              'date'        => $this->input->post('date'),
              'type_sur'    => $this->input->post('type_sur'),
              'ind_time'    => $this->input->post('ind_time'),
              'time_block' => $this->input->post('time_block'),
              'reg_ans'     => $this->input->post('reg_ans'),
              'quality_block' => $this->input->post('quality_block'),
              'ans_start_time' => $this->input->post('ans_start_time'),
              'ans_end_time' => $this->input->post('ans_end_time'),
              'sur_start_time' => $this->input->post('sur_start_time'),
              'sur_end_time' => $this->input->post('sur_end_time'),
              'irr_arth' => $this->input->post('irr_arth'),
              'int_mon' => implode(',',$this->input->post('int_mon')),
              'blo_loc' => $this->input->post('blo_loc'),
              'con_loc' => $this->input->post('con_loc'),
              'cat_loc' => $this->input->post('cat_loc'),
              'air_ans' => $this->input->post('air_ans'),
              'int_ven' => $this->input->post('int_ven'),
              'pre_drug' => implode(',',$this->input->post('pre_drug')),
              'pre_dose' =>implode(',',$this->input->post('pre_dose')),
              'inh_age' => implode(',',$this->input->post('inh_age')),
              'inh_age_avail' => implode(',',$this->input->post('inh_age_avail')),
              'age_if_avail' => implode(',',$this->input->post('age_if_avail')),
              'opi_bolus' => implode(',',$this->input->post('opi_bolus')),
              'opi_bolus_dose' => implode(',',$this->input->post('opi_bolus_dose')),
              'opi_inf' => implode(',',$this->input->post('opi_inf')),
              'opi_inf_dose' => implode(',',$this->input->post('opi_inf_dose')),
              'other_ans' => implode(',',$this->input->post('other_ans')),
              'other_ans_dose' => implode(',',$this->input->post('other_ans_dose')),
              'vas_bolus' => implode(',',$this->input->post('vas_bolus')),
              'vas_bolus_dose' => implode(',',$this->input->post('vas_bolus_dose')),
              'vas_inf' => implode(',',$this->input->post('vas_inf')),
              'vas_inf_dose' => implode(',',$this->input->post('vas_inf_dose')),
              'other_vas_age_ind_bolus' => implode(',',$this->input->post('other_vas_age_ind_bolus')),
              'other_vas_age_ind_bolus_dose' => implode(',',$this->input->post('other_vas_age_ind_bolus_dose')),
              'other_vas_age_main_bolus' => implode(',',$this->input->post('other_vas_age_main_bolus')),
              'other_vas_age_main_bolus_dose' => implode(',',$this->input->post('other_vas_age_main_bolus_dose')),
              'other_vas_age_main_inf' => implode(',',$this->input->post('other_vas_age_main_inf')),
              'other_vas_age_main_inf_dose' => implode(',',$this->input->post('other_vas_age_main_inf_dose')),
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
        $this->db->join('patient','patient.id = doc_records.mrn');
        $this->db->limit($limit, $start);
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
    }

}