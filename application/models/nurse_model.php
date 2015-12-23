<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Nurse_model extends CI_Model {

    // جزء العياده
    public function C_get_contact() {
        $query = $this->db->get('nurse');
        return $query->result();
    }

    public function C_add() {

        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'allegy' => $this->input->post('allegy'),
            'number_1' => implode(':', $_POST['number_1']),
            'mrn' => $this->input->post('Pationt_Id'),
            'dose_1' => implode(':', $this->input->post('dose_1')),
            'time_1' => implode(':', $this->input->post('time_1')),
            'wt' => $this->input->post('wt'),
            'ht' => $this->input->post('ht'),
            'temp' => $this->input->post('temp'),
            'min' => $this->input->post('min'),
            'max' => $this->input->post('max'),
            'p' => $this->input->post('p'),
            'rr' => $this->input->post('rr'),
            'pox' => $this->input->post('pox'),
            'pain' => $this->input->post('pain'),
            'time' => $this->input->post('time'),
            'complain' => $this->input->post('complain'),
            'sign' => $this->input->post('sign')
        );
        $this->db->insert('nurse', $data);
    }

    public function C_Count() {
        return $this->db->count_all("nurse");
    }

    public function C_getpationt($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("nurse");
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
        $query = $this->db->get("nurse");
        return $query->result();
    }

    public function C_search() {
        $match = $this->input->post('search');
        $this->db->like('Pationt_Id', $match);
        $query = $this->db->get('nurse');
        return $query->result();
    }

// nur_notes tabel
    public function get_contact() {
        $query = $this->db->get('nur_notes');
        return $query->result();
    }

    public function add_notes() {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'patient_id' => $this->input->post('patient_id'),
            'mrn' => $this->input->post('mrn'),
            'name' => $this->input->post('name'),
            'age' => $this->input->post('age'),
            'gender' => $this->input->post('gender'),
            'notes' => $this->input->post('notes'),
            'dia' => $this->input->post('dia'),
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('nur_notes', $data);
    }

    public function Count() {
        return $this->db->count_all("nur_notes");
    }

    public function getpationt($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("nur_notes");
        return $query->result();
    }

    public function getContactByID($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("nur_notes");
        return $query->result();
    }

    public function search() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('nur_notes');
        return $query->result();
    }

    // tabel nur_pain
    public function get_pain() {
        $query = $this->db->get('nur_pain');
        return $query->result();
    }

    public function add_pain() {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'patient_id' => $this->input->post('patient_id'),
            'mrn' => $this->input->post('mrn'),
            'name' => $this->input->post('name'),
            'age' => $this->input->post('age'),
            'gender' => $this->input->post('gender'),
            'dia' => $this->input->post('dia'),
            'pain' => $this->input->post('pain'),
            'location' => $this->input->post('location'),
            'charact' => $this->input->post('charact'),
            'symptoms' => $this->input->post('symptoms'),
            'pain_inter' => $this->input->post('pain_inter'),
            'inten' => $this->input->post('inten'),
            'intervention' => $this->input->post('intervention'),
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $type_pain1 = $this->input->post('type_pain1');
        $type_pain2 = $this->input->post('type_pain2');
        $type_pain3 = $this->input->post('type_pain3');
        $type_pain4 = $this->input->post('type_pain4');
        $type_pain5 = $this->input->post('type_pain5');
        $type_pain6 = $this->input->post('type_pain6');
        $type_pain7 = $this->input->post('type_pain7');

        $data['type_pain'] = ' | ' . $type_pain1 . ' | ' . $type_pain2 . ' | ' . $type_pain3 . ' | ' . $type_pain4 . ' | ' . $type_pain5 . '|' . $type_pain6 . ' | ' . $type_pain7 . ' | ';
        $this->db->insert('nur_pain', $data);
    }

    public function Count_pain() {
        return $this->db->count_all("nur_pain");
    }

    public function getpain($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("nur_pain");
        return $query->result();
    }

    public function getpainByID($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("nur_pain");
        return $query->result();
    }

    public function search_pain() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('nur_pain');
        return $query->result();
    }

    // tabel nur_asses
    public function get_assesment() {
        $query = $this->db->get('nur_asses');
        return $query->result();
    }

    public function add_asses() {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'patient_id' => $this->input->post('patient_id'),
            'mrn' => $this->input->post('mrn'),
            'name' => $this->input->post('name'),
            'age' => $this->input->post('age'),
            'gender' => $this->input->post('gender'),
            'dia' => $this->input->post('dia'),
            'facial' => $this->input->post('facial'),
            'speech' => $this->input->post('speech'),
            'color' => $this->input->post('color'),
            'hygiene' => $this->input->post('hygiene'),
            'moisture' => $this->input->post('moisture'),
            'lesions' => $this->input->post('lesions'),
            'breakdowen' => $this->input->post('breakdowen'),
            'orinted' => $this->input->post('orinted'),
            'pupits' => $this->input->post('pupits'),
            'hand' => $this->input->post('hand'),
            'feet' => $this->input->post('feet'),
            'pulses_rate' => $this->input->post('pulses_rate'),
            'pulses_rhythm' => $this->input->post('pulses_rhythm'),
            'jvd' => $this->input->post('jvd'),
            'edema' => $this->input->post('edema'),
            'resp_rate' => $this->input->post('resp_rate'),
            'resp_rhythm' => $this->input->post('resp_rhythm'),
            'resp_depth' => $this->input->post('resp_depth'),
            'chest' => $this->input->post('chest'),
            'breath' => $this->input->post('breath'),
            'shap' => $this->input->post('shap'),
            'sound' => $this->input->post('sound'),
            'tenderness' => $this->input->post('tenderness'),
            'note' => $this->input->post('note'),
            'void_patten' => $this->input->post('void_patten'),
            'void_amount' => $this->input->post('void_amount'),
            'void_color' => $this->input->post('void_color'),
            'void_clarith' => $this->input->post('void_clarith'),
            'void_freq' => $this->input->post('void_freq'),
            'pain' => $this->input->post('pain'),
            'family' => $this->input->post('family'),
            'support' => $this->input->post('support'),
            'care' => $this->input->post('care'),
            'usual' => $this->input->post('usual'),
            'hospitalized' => $this->input->post('hospitalized'),
            'sleeping' => $this->input->post('sleeping'),
            'other' => $this->input->post('other'),
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('nur_asses', $data);
    }

    public function Count_asses() {
        return $this->db->count_all("nur_asses");
    }

    public function get_asses($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("nur_asses");
        return $query->result();
    }

    public function getassesByID($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("nur_asses");
        return $query->result();
    }

    public function search_asses() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('nur_a');
        return $query->result();
    }

// tabel nur_vital
    public function get_virtal() {
        $query = $this->db->get('nur_vital');
        return $query->result();
    }

    public function add_virtal() {
        $data = array(
            'mrn' => $this->input->post('mrn'),
            'user_id' => $this->session->userdata('UserId'),
            'temp' => $this->input->post('temp'),
            'pulse' => $this->input->post('pulse'),
            'rr' => $this->input->post('rr'),
            'bp' => $this->input->post('bp'),
            'notes' => $this->input->post('notes'),
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('nur_vital', $data);
    }

    public function Count_virtal() {
        return $this->db->count_all("nur_vital");
    }

    public function get_virtall($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("nur_vital");
        return $query->result();
    }

    public function getvirtalByID($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("nur_vital");
        return $query->result();
    }

    public function search_vital() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('nur_vital');
        return $query->result();
    }

    // tabel nur_sheet
    public function get_sheet() {
        $query = $this->db->get('nur_sheet');
        return $query->result();
    }

    public function add_sheet() {
        $data = array(
            'mrn' => $this->input->post('mrn'),
            'user_id' => $this->session->userdata('UserId'),
            'blood' => $this->input->post('blood'),
            'sugar' => $this->input->post('sugar'),
            'acetone' => $this->input->post('acetone'),
            'oral' => $this->input->post('oral'),
            'insulin' => $this->input->post('insulin'),
            'dose' => $this->input->post('dose'),
            'site' => $this->input->post('site'),
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('nur_sheet', $data);
    }

    public function Count_sheet() {
        return $this->db->count_all("nur_sheet");
    }

    public function getsheet($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("nur_sheet");
        return $query->result();
    }

    public function getsheetByID($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("nur_sheet");
        return $query->result();
    }

    public function search_sheet() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('nur_sheet');
        return $query->result();
    }

// tabel nur_care
    public function get_care() {
        $query = $this->db->get('nur_care');
        return $query->result();
    }

    public function add_care() {
        $data = array(
            'mrn' => $this->input->post('mrn'),
            'user_id' => $this->session->userdata('UserId'),
            'need' => $this->input->post('need'),
            'nursing' => $this->input->post('nursing'),
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('nur_care', $data);
    }

    public function Count_care() {
        return $this->db->count_all("nur_care");
    }

    public function getcare($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("nur_care");
        return $query->result();
    }

    public function getcareByID($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("nur_care");
        return $query->result();
    }

    public function search_care() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('nur_care');
        return $query->result();
    }

    // nur_eva

    public function get_eva() {
        $query = $this->db->get('nur_eva');
        return $query->result();
    }

    public function add_eva($id) {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'eva_id' => $id,
            'eva' => $this->input->post('eva'),
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('nur_eva', $data);
    }

    public function Count_eva() {
        return $this->db->count_all("nur_eva");
    }

    public function geteva($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("nur_eva");
        return $query->result();
    }

    public function getev($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("nur_eva");
        return $query->result();
    }

    // tabel nur_voise
    public function get_voise() {
        $query = $this->db->get('nur_voise');
        return $query->result();
    }

    public function add_voise() {
        $data = array(
            'mrn' => $this->input->post('mrn'),
            'user_id' => $this->session->userdata('UserId'),
            'dr_order' => $this->input->post('dr_order'),
            'nurse' => $this->input->post('nurse'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('nur_voise', $data);
    }

    public function Count_voise() {
        return $this->db->count_all("nur_voise");
    }

    public function getvoise($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("nur_voise");
        return $query->result();
    }

    public function getvoiseByID($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("nur_voise");
        return $query->result();
    }

    public function search_voise() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('nur_voise');
        return $query->result();
    }

// nur_drug
    public function get_drug($id) {
        $query = $this->db->get('doc_drug');
        return $query->result();
    }

    public function add_drug($id) {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'drug_id' => $id,
            'mrn' => $this->input->post('mrn'),
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('nur_drug', $data);
    }

    public function Count_drug() {
        return $this->db->count_all("doc_drug");
    }

    public function getdrug($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("doc_drug");
        return $query->result();
    }

    public function getdrugByID($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("doc_drug");
        return $query->result();
    }

    public function search_drug() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('doc_drug');
        return $query->result();
    }

    // tabel nur_need
    public function get_need() {
        $query = $this->db->get('nur_need');
        return $query->result();
    }

    public function add_need() {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'mrn' => $this->input->post('mrn'),
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('nur_need', $data);
    }

    public function Count_need() {
        return $this->db->count_all("doc_need");
    }

    public function getneed($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("doc_need");
        return $query->result();
    }

    public function getContactByneed($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("doc_need");
        return $query->result();
    }

    // tabel nur_fluid

    public function get_fluid($id) {
        $query = $this->db->get('nur_fluid');
        return $query->result();
    }

    public function add_fluid($id) {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'fluid_id' => $id,
            'mrn' => $this->input->post('mrn'),
            'start' => $this->input->post('start'),
            'end' => $this->input->post('end'),
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('nur_fluid', $data);
    }

    public function Count_fluid() {
        return $this->db->count_all("doc_fluid");
    }

    public function getfluid($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("doc_fluid");
        return $query->result();
    }

    public function getContactByfluid($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("doc_fluid");
        return $query->result();
    }

    // tabel nur_time_out
    public function get_time_out() {
        $query = $this->db->get('nur_time_out');
        return $query->result();
    }

    public function add_time_out() {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'mrn' => $this->input->post('mrn'),
            'confirm' => $this->input->post('confirm'),
            'surgeon' => $this->input->post('surgeon'),
            'site' => implode(":", $this->input->post('site')),
            'event' => implode(":", $this->input->post('event')),
            'anti' => $this->input->post('anti'),
            'imaging' => $this->input->post('imaging'),
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('nur_time_out', $data);
    }

    public function Count_time_out() {
        return $this->db->count_all("nur_time_out");
    }

    public function getpationt_time_out($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("nur_time_out");
        return $query->result();
    }

    public function getContactByID_time_out($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("nur_time_out");
        return $query->result();
    }

    public function search_time_out() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('nur_time_out');
        return $query->result();
    }

    // tabel nur_sign_in
    public function get_sign_in() {
        $query = $this->db->get('nur_sign_in');
        return $query->result();
    }

    public function add_sign_in() {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'mrn' => $this->input->post('mrn'),
            'site' => implode(":", $this->input->post('site')),
            'patient' => implode(":", $this->input->post('patient')),
            'alle' => $this->input->post('all'),
            'risk' => $this->input->post('risk'),
            'blood' => $this->input->post('blood'),
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('nur_sign_in', $data);
    }

    public function Count_sign_in() {
        return $this->db->count_all("nur_sign_in");
    }

    public function getpationt_sign_in($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("nur_sign_in");
        return $query->result();
    }

    public function getContactByID_sign_in($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("nur_sign_in");
        return $query->result();
    }

    public function search_sign_in() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('nur_sign_in');
        return $query->result();
    }

    // tabel nur_sign_out
    public function get_sign_out() {
        $query = $this->db->get('nur_sign_out');
        return $query->result();
    }

    public function add_sign_out() {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'mrn' => $this->input->post('mrn'),
            'verbally' => implode(":", $this->input->post('verbally')),
            'sign' => $this->input->post('sign'),
            'time' => $this->input->post('time'),
        );
        $this->db->insert('nur_sign_out', $data);
    }

    public function Count_sign_out() {
        return $this->db->count_all("nur_sign_in");
    }

    public function getpationt_sign_out($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("nur_sign_out");
        return $query->result();
    }

    public function getContactByID_sign_out($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("nur_sign_out");
        return $query->result();
    }

    public function search_sign_out() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);

        $query = $this->db->get('nur_sign_out');
        return $query->result();
    }

}

?>