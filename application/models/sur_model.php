<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sur_model extends CI_Model {

    public function C_get_contact() {
        $query = $this->db->get('sur');
        return $query->result();
    }

    public function C_add() {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'location' => $this->input->post('location'),
            'mrn' => $this->input->post('mrn'),
            'quality' => $this->input->post('quality'),
            'severty' => $this->input->post('severty'),
            'duration' => $this->input->post('duration'),
            'factor' => $this->input->post('factor'),
            'assoc' => $this->input->post('assoc'),
            'history' => $this->input->post('history'),
            'tobaco' => $this->input->post('tobaco'),
            'alcohol' => $this->input->post('alcohol'),
            'drugs' => $this->input->post('drugs'),
            'hiv' => $this->input->post('hiv'),
            'occ' => $this->input->post('occ'),
            'edu' => $this->input->post('edu'),
            'marital' => $this->input->post('marital'),
            'time' => $this->input->post('time'),
            'sign' => $this->input->post('sign'),
        );
        $this->db->insert('sur', $data);
    }

    public function C_Count() {
        return $this->db->count_all("sur");
    }

    public function C_getpationt($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("sur");
        return $query->result();
    }

    public function C_remove($id) {
        $this->db->delete('test', array("id" => $id));
    }

    public function C_update_post($id, $data) {
        $this->db->get('test');

        $this->db->where('id', $id);
        $this->db->update('test', $data);
    }

    public function C_getContactByID($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("sur");
        return $query->result();
    }

    public function C_search() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('sur');
        return $query->result();
    }
    //tabel sur_drug

    public function get_contact() {
        $query = $this->db->get('sur_drug');
        return $query->result();
    }

    public function add() {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'patient_id' => $this->input->post('patient_id'),
            'mrn' => $this->input->post('mrn'),
            'name' => $this->input->post('name'),
            'age' => $this->input->post('age'),
            'gender' => $this->input->post('gender'),
            'wt' => $this->input->post('wt'),
            'bsa' => $this->input->post('bsa'),
            'dia' => $this->input->post('dia'),
            'alle' => $this->input->post('alle'),
            'drug' => $this->input->post('drug'),
            'dose' => $this->input->post('dose'),
            'freq' => $this->input->post('freq'),
            'dur' => $this->input->post('dur'),
            'route' => $this->input->post('route'),
            'inst' => $this->input->post('inst'),
            'sign' => $this->input->post('sign'),
            'date' => $this->input->post('date'),
        );
        $this->db->insert('sur_drug', $data);
    }

    public function Count() {
        return $this->db->count_all("sur_drug");
    }

    public function getpationt($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("sur_drug");
        return $query->result();
    }

    public function remove($id) {
        $this->db->delete('test', array("id" => $id));
    }

    public function update_post($id, $data) {
        $this->db->get('test');

        $this->db->where('id', $id);
        $this->db->update('test', $data);
    }

    public function getContactByID($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("sur_drug");
        return $query->result();
    }

    public function search() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('sur_drug');
        return $query->result();
    }

    // tabel _sur_order

    public function get_order() {
        $query = $this->db->get('sur_ord');
        return $query->result();
    }

    public function add_order() {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'patient_id' => $this->input->post('patient_id'),
            'mrn' => $this->input->post('mrn'),
            'name' => $this->input->post('name'),
            'age' => $this->input->post('age'),
            'gender' => $this->input->post('gender'),
            'dia' => $this->input->post('dia'),
            'order' => $this->input->post('order'),
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('sur_ord', $data);
    }

    public function Count_order() {
        return $this->db->count_all("sur_ord");
    }

    public function get_orders($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("sur_ord");
        return $query->result();
    }

    public function getContactByorder($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("sur_ord");
        return $query->result();
    }

    public function search_order() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('sur');
        return $query->result();
    }

//tabel sur_ rel
    public function get_rel() {
        $query = $this->db->get('sur_rel');
        return $query->result();
    }

    public function add_rel() {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'patient_id' => $this->input->post('patient_id'),
            'mrn' => $this->input->post('mrn'),
            'name' => $this->input->post('name'),
            'age' => $this->input->post('age'),
            'gender' => $this->input->post('gender'),
            'dia' => $this->input->post('dia'),
            'sub' => $this->input->post('sub'),
            'edu' => $this->input->post('edu'),
            'res' => $this->input->post('res'),
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('sur_rel', $data);
    }

    public function Count_rel() {
        return $this->db->count_all("sur_rel");
    }

    public function getrel($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("sur_rel");
        return $query->result();
    }

    public function getContactByrel($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("sur_rel");
        return $query->result();
    }

    public function search_rel() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('sur');
        return $query->result();
    }

// tabel sur_nu
    public function get_nu() {
        $query = $this->db->get('sur_nu');
        return $query->result();
    }

    public function add_nu() {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'patient_id' => $this->input->post('patient_id'),
            'mrn' => $this->input->post('mrn'),
            'name' => $this->input->post('name'),
            'age' => $this->input->post('age'),
            'gender' => $this->input->post('gender'),
            'dia' => $this->input->post('dia'),
            'type' => $this->input->post('type'),
            'nu' => $this->input->post('nu'),
            'notes' => $this->input->post('notes'),
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('sur_nu', $data);
    }

    public function Count_nu() {
        return $this->db->count_all("sur_nu");
    }

    public function get_nus($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("sur_nu");
        return $query->result();
    }

    public function getContactBynu($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("sur_nu");
        return $query->result();
    }

    public function search_nu() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('sur_nu');
        return $query->result();
    }

    //tabel sur_req
    public function get_req() {
        $query = $this->db->get('sur_req');
        return $query->result();
    }

    public function add_req() {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'patient_id' => $this->input->post('patient_id'),
            'mrn' => $this->input->post('mrn'),
            'name' => $this->input->post('name'),
            'age' => $this->input->post('age'),
            'gender' => $this->input->post('gender'),
            'dia' => $this->input->post('dia'),
            'spe' => $this->input->post('spe'),
            'from_sp' => $this->input->post('from_sp'),
            'reason' => $this->input->post('reason'),
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('sur_req', $data);
    }

    public function Count_req() {
        return $this->db->count_all("sur_req");
    }

    public function get_reqe($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("sur_req");
        return $query->result();
    }

    public function getContactByreq($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("sur_req");
        return $query->result();
    }

    public function search_req() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('sur_req');
        return $query->result();
    }

    // tabel sur_prog
    public function get_prog() {
        $query = $this->db->get('sur_prog');
        return $query->result();
    }

    public function add_prog() {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'patient_id' => $this->input->post('patient_id'),
            'mrn' => $this->input->post('mrn'),
            'name' => $this->input->post('name'),
            'age' => $this->input->post('age'),
            'gender' => $this->input->post('gender'),
            'dia' => $this->input->post('dia'),
            'obse' => $this->input->post('obse'),
            'complain' => $this->input->post('complain'),
            'eva' => $this->input->post('eva'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('sur_prog', $data);
    }

    public function Count_prog() {
        return $this->db->count_all("sur_prog");
    }

    public function get_progr($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("sur_prog");
        return $query->result();
    }

    public function getContactByprog($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("sur_prog");
        return $query->result();
    }

    public function search_prog() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('sur_prog');
        return $query->result();
    }

    // sur_physical
    public function get_physical() {
        $query = $this->db->get('sur_physical');
        return $query->result();
    }

    public function add_physical() {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'patient_id' => $this->input->post('patient_id'),
            'mrn' => $this->input->post('mrn'),
            'name' => $this->input->post('name'),
            'age' => $this->input->post('age'),
            'gender' => $this->input->post('gender'),
            'occupation' => $this->input->post('occupation'),
            'marital' => $this->input->post('marital'),
            'children' => $this->input->post('children'),
            'no_children' => $this->input->post('no_children'),
            'habits' => implode(":", $this->input->post('habits')),
            'other' => $this->input->post('other'),
            'allergy' => $this->input->post('allergy'),
            'comment' => $this->input->post('comment'),
            'reaction' => $this->input->post('reaction'),
            'reaction_comment' => $this->input->post('reaction_comment'),
            'present' => $this->input->post('present'),
            'surgery' => $this->input->post('surgery'),
            'family' => $this->input->post('family'),
            'psychosocial' => $this->input->post('psychosocial'),
            'number_1' => implode(":", $this->input->post('number_1')),
            'dose_1' => implode(":", $this->input->post('dose_1')),
            'duration' => implode(":", $this->input->post('duration')),
            'wt' => $this->input->post('wt'),
            'ht' => $this->input->post('ht'),
            'temp' => $this->input->post('temp'),
            'bp' => $this->input->post('bp'),
            'pluse' => $this->input->post('pluse'),
            'rr' => $this->input->post('rr'),
            'genera' => $this->input->post('genera'),
            'head' => $this->input->post('head'),
            'head_comment' => $this->input->post('head_comment'),
            'chest' => $this->input->post('chest'),
            'chest_comment' => $this->input->post('chest_comment'),
            'heart' => $this->input->post('heart'),
            'heart_comment' => $this->input->post('heart_comment'),
            'abdomen' => $this->input->post('abdomen'),
            'abdomen_comment' => $this->input->post('abdomen_comment'),
            'neurological' => $this->input->post('chest'),
            'neurological_comment' => $this->input->post('neurological_comment'),
            'findings' => $this->input->post('findings'),
            'findings_comment' => $this->input->post('findings_comment'),
            'muscu' => $this->input->post('muscu'),
            'muscu_comment' => $this->input->post('muscu_comment'),
            'psy_comment' => $this->input->post('psy_comment'),
            'status' => $this->input->post('status'),
            'status_comment' => $this->input->post('status_comment'),
            'diagnosis' => $this->input->post('diagnosis'),
            'icd' => $this->input->post('icd'),
            'plane' => $this->input->post('plane'),
            'risk' => implode(":", $this->input->post('risk')),
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('sur_physical', $data);
    }

    public function Count_physical() {
        return $this->db->count_all("sur_physical");
    }

    public function get_physica($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("sur_physical");
        return $query->result();
    }

    public function getContactByphysical($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("sur_physical");
        return $query->result();
    }

    public function search_physical() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('sur');
        return $query->result();
    }

// tabel sur_insulin
    public function get_insulin() {
        $query = $this->db->get('sur_insulin');
        return $query->result();
    }

    public function add_insulin() {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'mrn' => $this->input->post('mrn'),
            'start_1' => $this->input->post('start_1'),
            'insulin_1' => $this->input->post('insulin_1'),
            'end_1' => $this->input->post('end_1'),
            'insulin_2' => $this->input->post('insulin_2'),
            'end_2' => $this->input->post('end_2'),
            'start_3' => $this->input->post('start_3'),
            'insulin_3' => $this->input->post('insulin_3'),
            'end_3' => $this->input->post('end_3'),
            'start_4' => $this->input->post('start_4'),
            'insulin_4' => $this->input->post('insulin_4'),
            'end_4' => $this->input->post('end_4'),
            'start_5' => $this->input->post('start_5'),
            'insulin_5' => $this->input->post('insulin_5'),
            'end_5' => $this->input->post('end_5'),
            'more' => $this->input->post('more'),
            'give' => $this->input->post('give'),
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('sur_insulin', $data);
    }

    public function Count_insulin() {
        return $this->db->count_all("sur_insulin");
    }

    public function get_insuli($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("sur_insulin");
        return $query->result();
    }

    public function getContactByinsulin($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("sur_insulin");
        return $query->result();
    }

    public function search_insulin() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('sur');
        return $query->result();
    }

// tabel sur_discharge
    public function get_discharge() {
        $query = $this->db->get('sur_discharge');
        return $query->result();
    }

    public function add_discharge() {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'mrn' => $this->input->post('mrn'),
            'mane' => $this->input->post('mane'),
            'primar' => $this->input->post('primary'),
            'history' => $this->input->post('history'),
            'physical' => $this->input->post('physical'),
            'lab' => $this->input->post('lab'),
            'dia_1' => $this->input->post('dia_1'),
            'icd_1' => $this->input->post('icd_1'),
            'dia_2' => $this->input->post('dia_2'),
            'icd_2' => $this->input->post('icd_2'),
            'dia_3' => $this->input->post('dia_3'),
            'icd_3' => $this->input->post('icd_3'),
            'complication' => $this->input->post('complication'),
            'treatment' => $this->input->post('treatment'),
            'recom' => $this->input->post('recom'),
            'follow' => $this->input->post('follow'),
            'type' => $this->input->post('type'),
            'transfer' => $this->input->post('transfer'),
            'cause' => $this->input->post('cause'),
            'conditio' => $this->input->post('condition'),
            'transport' => $this->input->post('transport'),
            'consultant' => $this->input->post('consultant'),
            'given' => $this->input->post('given'),
            'provider' => $this->input->post('provider'),
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('sur_discharge', $data);
    }

    public function Count_discharge() {
        return $this->db->count_all("sur_discharge");
    }

    public function get_discharg($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("sur_discharge");
        return $query->result();
    }

    public function getContactBydischarge($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("sur_discharge");
        return $query->result();
    }

    public function search_discharge() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('sur');
        return $query->result();
    }

    // tabel sur_voise
    public function get_voise() {
        $query = $this->db->get('sur_voise');
        return $query->result();
    }

    public function add_voise($id) {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'mrn' => $this->input->post('mrn'),
            'voise_id' => $id,
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('sur_voise', $data);
    }

    public function Count_voise() {
        return $this->db->count_all("nur_voise");
    }

    public function getvoise($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("nur_voise");
        return $query->result();
    }

    public function getContactByvoise($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("sur_voise");
        return $query->result();
    }

    public function search_voise() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('sur_voise');
        return $query->result();
    }

    // tabel sur_need
    public function get_need() {
        $query = $this->db->get('sur_need');
        return $query->result();
    }

    public function add_need() {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'mrn' => $this->input->post('mrn'),
            'need' => $this->input->post('need'),
            'drug' => $this->input->post('drug'),
            'dose' => $this->input->post('dose'),
            'freq' => $this->input->post('freq'),
            'inst' => $this->input->post('inst'),
            'rfa' => $this->input->post('rfa'),
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('sur_need', $data);
    }

    public function Count_need() {
        return $this->db->count_all("sur_need");
    }

    public function getneed($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("sur_need");
        return $query->result();
    }

    public function getContactByneed($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("sur_need");
        return $query->result();
    }

    public function search_need() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('sur_need');
        return $query->result();
    }

// tabel sur_fluid
    public function get_fluid() {
        $query = $this->db->get('sur_fluid');
        return $query->result();
    }

    public function add_fluid() {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'mrn' => $this->input->post('mrn'),
            'type' => $this->input->post('type'),
            'rate' => $this->input->post('rate'),
            'drug' => $this->input->post('drug'),
            'dose' => $this->input->post('dose'),
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('sur_fluid', $data);
    }

    public function Count_fluid() {
        return $this->db->count_all("sur_fluid");
    }

    public function getfluid($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("sur_fluid");
        return $query->result();
    }

    public function getContactByfluid($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("sur_fluid");
        return $query->result();
    }

    public function search_fluid() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('sur_fluid');
        return $query->result();
    }

    // tabel sur_fluid_chart
    public function get_fluid_chart() {
        $query = $this->db->get('sur_fluid_chart');
        return $query->result();
    }

    public function add_fluid_chart($id) {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'mrn' => $this->input->post('mrn'),
            'fluid_chart' => $id,
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('sur_fluid_chart', $data);
    }

    public function Count_fluid_chart() {
        $data['doc'] = $this->db->count_all("sur_fluid");
        $data['nur'] = $this->db->count_all("nur_fluid");
        return $data;
    }

    public function getfluidchart($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("nur_fluid");
        return $query->result();
    }

    // tabel sur_rad
    public function get_rad() {
        $query = $this->db->get('sur_rad');
        return $query->result();
    }

    public function add_rad() {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'mrn' => $this->input->post('mrn'),
            'clinc' => $this->input->post('clinc'),
            'other_skull' => $this->input->post('other_skull'),
            'preg' => $this->input->post('preg'),
            'skull' => implode(':', $this->input->post('skull')),
            'orbit' => $this->input->post('orbit'),
            'mastoid' => $this->input->post('mastoid'),
            'pns' => implode(':', $this->input->post('pns')),
            'tmj' => implode(':', $this->input->post('tmj')),
            'mandible' => implode(':', $this->input->post('mandible')),
            'carvical' => implode(':', $this->input->post('carvical')),
            'dorsal' => implode(':', $this->input->post('dorsal')),
            'lumbar' => implode(':', $this->input->post('lumbar')),
            'lumbo' => implode(':', $this->input->post('lumbo')),
            'coccyx' => implode(':', $this->input->post('coccyx')),
            'joint' => implode(':', $this->input->post('joint')),
            'extra' => $this->input->post('extra'),
            'ribs' => implode(':', $this->input->post('ribs')),
            'clavical' => $this->input->post('clavical'),
            'pelvis' => implode(':', $this->input->post('pelvis')),
            'hip' => implode(':', $this->input->post('hip')),
            'acet' => implode(':', $this->input->post('acet')),
            'femur' => implode(':', $this->input->post('femur')),
            'patella' => implode(':', $this->input->post('patella')),
            'tibia' => implode(':', $this->input->post('tibia')),
            'ankle' => implode(':', $this->input->post('ankle')),
            'feet' => implode(':', $this->input->post('feet')),
            'calc' => implode(':', $this->input->post('calc')),
            'shoulder' => implode(':', $this->input->post('shoulder')),
            'humerus' => implode(':', $this->input->post('humerus')),
            'elbow' => implode(':', $this->input->post('elbow')),
            'forearm' => implode(':', $this->input->post('forearm')),
            'wrist' => implode(':', $this->input->post('wrist')),
            'hand' => implode(':', $this->input->post('hand')),
            'view' => implode(':', $this->input->post('view')),
            'lary' => implode(':', $this->input->post('lary')),
            'asopharynx' => $this->input->post('asopharynx'),
            'chest' => implode(':', $this->input->post('chest')),
            'gland' => implode(':', $this->input->post('gland')),
            'abdo' => implode(':', $this->input->post('abdo')),
            'put' => $this->input->post('put'),
            'micturating' => $this->input->post('micturating'),
            'ivu' => $this->input->post('ivu'),
            'infusion' => $this->input->post('infusion'),
            'antegrade' => implode(':', $this->input->post('antegrade')),
            'retrograde' => implode(':', $this->input->post('retrograde')),
            'cyto' => implode(':', $this->input->post('cyto')),
            'cts' => implode(':', $this->input->post('cts')),
            'cts_other' => $this->input->post('cts_other'),
            'us' => implode(':', $this->input->post('us')),
            'us_other' => $this->input->post('us_other'),
            'breast' => implode(':', $this->input->post('breast')),
            'color' => implode(':', $this->input->post('color')),
            'color_other' => $this->input->post('color_other'),
            'upper' => implode(':', $this->input->post('upper')),
            'lower' => implode(':', $this->input->post('lower')),
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('sur_rad', $data);
    }

    public function Count_rad() {
        return $this->db->count_all("sur_rad");
    }

    public function getrad($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("sur_rad");
        return $query->result();
    }

    public function getContactByrad($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("sur_rad");
        return $query->result();
    }

    public function search_rad() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('sur_rad');
        return $query->result();
    }

// tabel sur_lab
    public function get_lab() {
        $query = $this->db->get('sur_lab');
        return $query->result();
    }

    public function add_lab() {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'mrn' => $this->input->post('mrn'),
            'clinc' => $this->input->post('clinc'),
            'lab' => implode(':', $this->input->post('lab')),
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('sur_lab', $data);
    }

    public function Count_lab() {
        return $this->db->count_all("sur_lab");
    }

    public function getlab($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("sur_lab");
        return $query->result();
    }

    public function getContactBylab($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("sur_lab");
        return $query->result();
    }

    public function search_lab() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('sur_lab');
        return $query->result();
    }

    // tabel sur_risk
    public function get_risk() {
        $query = $this->db->get('sur_lab');
        return $query->result();
    }

    /*
      public function add_risk() {
      $data = array(
      'user_id' => $this->session->userdata('UserId'),
      'mrn' => $this->input->post('mrn'),
      'clinc' => $this->input->post('clinc'),
      'lab' => implode(':', $this->input->post('lab')),
      'sign' => $this->input->post('sign'),
      'time' => $this->input->post('time'),
      );
      $this->db->insert('sur_lab', $data);
      }

      public function Count_risk() {
      return $this->db->count_all("sur_lab");
      }

      public function getlab($limit, $start) {
      $this->db->limit($limit, $start);
      $query = $this->db->get("sur_lab");
      return $query->result();
      }

      public function getContactBylab($id) {
      $this->db->where('id', $id);
      $query = $this->db->get("sur_lab");
      return $query->result();
      }

      public function search_lab() {
      $match = $this->input->post('search');
      $this->db->like('mrn', $match);

      $query = $this->db->get('sur_lab');
      return $query->result();
      }
     */

    // دكتور التخدير
    // tabel sur_ana
    public function get_ana() {
        $query = $this->db->get('sur_ana');
        return $query->result();
    }

    public function add_ana() {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'mrn' => $this->input->post('mrn'),
            'hight' => $this->input->post('hight'),
            'wight_lbs' => $this->input->post('wight_lbs'),
            'wight' => $this->input->post('wight'),
            'obese' => $this->input->post('obese'),
            'status' => $this->input->post('status'),
            'diabetes' => $this->input->post('diabetes'),
            'insulin' => $this->input->post('insulin'),
            'smoking' => $this->input->post('smoking'),
            'pack' => $this->input->post('pack'),
            'last' => $this->input->post('last'),
            'hyper' => $this->input->post('hyper'),
            'treat' => $this->input->post('treat'),
            'bp' => $this->input->post('bp'),
            'coronary' => $this->input->post('coronary'),
            'reva' => $this->input->post('reva'),
            'mi' => $this->input->post('mi'),
            'date' => $this->input->post('date'),
            'dysa' => $this->input->post('dysa'),
            'ortho' => $this->input->post('ortho'),
            'vascular' => $this->input->post('vascular'),
            'carotid' => $this->input->post('carotid'),
            'stroke' => $this->input->post('stroke'),
            'tia' => $this->input->post('tia'),
            'hyperlipidemia' => $this->input->post('hyperlipidemia'),
            'valvular' => $this->input->post('valvular'),
            'atrial' => $this->input->post('atrial'),
            'heart' => $this->input->post('heart'),
            'oval' => $this->input->post('oval'),
            'other' => $this->input->post('other'),
            'spinal' => $this->input->post('spinal'),
            'other_spinal' => $this->input->post('other_spinal'),
            'cognitive' => $this->input->post('cognitive'),
            'other_cognitive' => $this->input->post('other_cognitive'),
            'motor' => $this->input->post('motor'),
            'other_motor' => $this->input->post('other_motor'),
            'injury' => $this->input->post('injury'),
            'other_injury' => $this->input->post('other_injury'),
            'park' => $this->input->post('park'),
            'neurologic' => $this->input->post('neurologic'),
            'other_neurologic' => $this->input->post('other_neurologic'),
            'spacify' => $this->input->post('spacify'),
            'current' => $this->input->post('current'),
            'list' => $this->input->post('list'),
            'surgeries' => $this->input->post('surgeries'),
            'hematocrit' => $this->input->post('hematocrit'),
            'lab' => $this->input->post('lab'),
            'fit' => $this->input->post('fit'),
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('sur_ana', $data);
    }

    public function Count_ana() {
        return $this->db->count_all("sur_ana");
    }

    public function getana($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("sur_ana");
        return $query->result();
    }

    public function getContactByana($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("sur_ana");
        return $query->result();
    }

    public function search_ana() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('sur_ana');
        return $query->result();
    }

    // tabel sur_clinical
    public function get_clinical() {
        $query = $this->db->get('sur_clinical');
        return $query->result();
    }

    public function add_clinical() {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'mrn' => $this->input->post('mrn'),
            'clinc_sbp' => $this->input->post('clinc_sbp'),
            'clinc_dbp' => $this->input->post('clinc_dbp'),
            'clinc_pos' => $this->input->post('clinc_pos'),
            'day_sbp' => $this->input->post('day_sbp'),
            'day_dbp' => $this->input->post('day_dbp'),
            'day_pos' => $this->input->post('day_pos'),
            'induction_sbp' => $this->input->post('induction_sbp'),
            'induction_dbp' => $this->input->post('induction_dbp'),
            'induction_pos' => $this->input->post('induction_pos'),
            'reading' => $this->input->post('reading'),
            'record' => $this->input->post('record'),
            'low_record' => $this->input->post('low_record'),
            'lowest' => $this->input->post('lowest'),
            'low_time' => $this->input->post('low_time'),
            'list' => implode(":", $this->input->post('list')),
            'volume' => implode(":", $this->input->post('volume')),
            'fluid' => $this->input->post('fluid'),
            'output' => $this->input->post('output'),
            'surgeon' => $this->input->post('surgeon'),
            'surgeon_sbp' => $this->input->post('surgeon_sbp'),
            'surgeon_map' => $this->input->post('surgeon_map'),
            'target' => $this->input->post('target'),
            'target_sbp' => $this->input->post('target_sbp'),
            'target_map' => $this->input->post('target_map'),
            'correct' => $this->input->post('correct'),
            'correct_choose' => $this->input->post('correct_choose'),
            'deliberate' => $this->input->post('deliberate'),
            'technique' => $this->input->post('technique'),
            'other_drug' => $this->input->post('other_drug'),
            'rate' => $this->input->post('rate'),
            'infusion' => $this->input->post('infusion'),
            'dose' => $this->input->post('dose'),
            'interm' => $this->input->post('interm'),
            'sudden' => $this->input->post('sudden'),
            'etco' => $this->input->post('etco'),
            'etco_min' => $this->input->post('etco_min'),
            'etco_val' => $this->input->post('etco_val'),
            'spo_val' => $this->input->post('spo_val'),
            'map' => $this->input->post('map'),
            'map_min' => $this->input->post('map_min'),
            'spo' => $this->input->post('spo'),
            'spo_min' => $this->input->post('spo_min'),
            'changing' => $this->input->post('changing'),
            'describing' => $this->input->post('describing'),
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('sur_clinical', $data);
    }

    public function Count_clinical() {
        return $this->db->count_all("sur_clinical");
    }

    public function getclinical($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("sur_clinical");
        return $query->result();
    }

    public function getContactByclinical($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("sur_clinical");
        return $query->result();
    }

    public function search_clinical() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('sur_clinical');
        return $query->result();
    }

    // tabel sur_operative
    public function get_operative() {
        $query = $this->db->get('sur_operative');
        return $query->result();
    }

    public function add_operative() {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'mrn' => $this->input->post('mrn'),
            'opertaion' => $this->input->post('opertaion'),
            'pre' => $this->input->post('pre'),
            'surgeon' => $this->input->post('surgeon'),
            'anasth' => $this->input->post('anasth'),
            'other' => $this->input->post('other'),
            'anesthesiologist' => $this->input->post('anesthesiologist'),
            'blood_loss' => $this->input->post('blood_loss'),
            'blood_trans' => $this->input->post('blood_trans'),
            'drains' => $this->input->post('drains'),
            'specimens' => $this->input->post('specimens'),
            'indications' => $this->input->post('indications'),
            'discription' => $this->input->post('discription'),
            'start_time' => $this->input->post('start_time'),
            'end_time' => $this->input->post('end_time'),
            'sterile_nurse' => $this->input->post('sterile_nurse'),
            'circulating_nurse' => $this->input->post('circulating_nurse'),
            'account' => implode(":", $this->input->post('account')),
            'instrument' => $this->input->post('instrument'),
            'Sponge' => $this->input->post('Sponge'),
            'needle' => $this->input->post('needle'),
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('sur_operative', $data);
    }

    public function Count_operative() {
        return $this->db->count_all("sur_operative");
    }

    public function getoperative($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("sur_operative");
        return $query->result();
    }

    public function getContactByoperative($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("sur_operative");
        return $query->result();
    }

    public function search_operative() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('sur_operative');
        return $query->result();
    }

}

?>