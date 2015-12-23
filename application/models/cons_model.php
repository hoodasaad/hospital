<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cons_model extends CI_Model {

    public function get_contact() {
        $query = $this->db->get('cons');
        return $query->result();
    }

    public function add() {
        $data = array(
            'user_id' => $this->session->userdata('UserId'),
            'mrn' => $this->input->post('mrn'),
            'physical' => $this->input->post('physical'),
            'labor' => $this->input->post('labor'),
            'diag' => $this->input->post('diag'),
            'recom' => $this->input->post('recom'),
            'drug_1' => implode(':', $this->input->post('drug_1')),
            'dose_1' => implode(':', $this->input->post('dose_1')),
            'freq_1' => implode(':', $this->input->post('freq_1')),
            'dur_1' => implode(':', $this->input->post('dur_1')),
            'route_1' => implode(':', $this->input->post('route_1')),
            'instruct_1' => implode(':', $this->input->post('instruct_1')),
            'time' => $this->input->post('time'),
            'sign' => $this->input->post('sign')
        );
        $con1 = $this->input->post('consit1');
        $con2 = $this->input->post('consit2');
        $data['consit'] = ' | ' . $con1 . ' | ' . $con2 . ' | ';
        $e1 = $this->input->post('eye');
        $e2 = $this->input->post('eye2');
        $e3 = $this->input->post('eye3');
        $e4 = $this->input->post('eye4');

        $data['eye'] = ' | ' . $e1 . ' | ' . $e2 . ' | ' . $e3 . ' | ' . $e4 . ' | ';
        $ent1 = $this->input->post('ent1');
        $ent2 = $this->input->post('ent2');
        $ent3 = $this->input->post('ent3');
        $ent4 = $this->input->post('ent4');
        $ent5 = $this->input->post('ent5');
        $data['ent'] = ' | ' . $ent1 . ' | ' . $ent2 . ' | ' . $ent3 . ' | ' . $ent4 . ' | ' . $ent5 . '|';

        $card1 = $this->input->post('card1');
        $card2 = $this->input->post('card2');
        $card3 = $this->input->post('card3');
        $card4 = $this->input->post('card4');
        $card5 = $this->input->post('card5');
        $data['card'] = ' | ' . $card1 . ' | ' . $card2 . ' | ' . $card3 . ' | ' . $card4 . ' | ' . $card5 . '|';

        $resp1 = $this->input->post('resp1');
        $resp2 = $this->input->post('resp2');
        $resp3 = $this->input->post('resp3');
        $resp4 = $this->input->post('resp4');
        $data['resp'] = ' | ' . $resp1 . ' | ' . $resp2 . ' | ' . $resp3 . ' | ' . $resp4 . ' | ';

        $gi1 = $this->input->post('gi1');
        $gi2 = $this->input->post('gi2');
        $gi3 = $this->input->post('gi3');
        $gi4 = $this->input->post('gi4');
        $gi5 = $this->input->post('gi5');
        $gi6 = $this->input->post('gi6');
        $gi7 = $this->input->post('gi7');
        $gi8 = $this->input->post('gi8');
        $gi9 = $this->input->post('gi9');
        $data['gi'] = ' | ' . $gi1 . ' | ' . $gi2 . ' | ' . $gi3 . ' | ' . $gi4 . '  | ' . $gi5 . ' | ' . $gi6 . ' | ' . $gi7 . ' | ' . $gi8 . ' | ' . $gi9;

        $gu1 = $this->input->post('gu1');
        $gu2 = $this->input->post('gu2');
        $gu3 = $this->input->post('gu3');
        $gu4 = $this->input->post('gu4');
        $gu5 = $this->input->post('gu5');

        $data['gu'] = ' | ' . $gu1 . ' | ' . $gu2 . ' | ' . $gu3 . ' | ' . $gu4 . ' | ' . $gu5 . '|';

        $mal1 = $this->input->post('male1');
        $mal2 = $this->input->post('male2');
        $mal3 = $this->input->post('male3');
        $mal4 = $this->input->post('male4');
        $data['male'] = ' | ' . $mal1 . ' | ' . $mal2 . ' | ' . $mal3 . ' | ' . $mal4 . ' | ';

        $fem1 = $this->input->post('female1');
        $fem2 = $this->input->post('female2');
        $fem3 = $this->input->post('female3');
        $fem4 = $this->input->post('female4');
        $data['female'] = ' | ' . $fem1 . ' | ' . $fem2 . ' | ' . $fem3 . ' | ' . $fem4 . ' | ';


        $ms1 = $this->input->post('musc1');
        $ms2 = $this->input->post('musc2');
        $ms3 = $this->input->post('musc3');
        $data['musc'] = ' | ' . $ms1 . ' | ' . $ms2 . ' | ' . $ms3 . ' | ';
        $sk1 = $this->input->post('skin1');
        $sk2 = $this->input->post('skin2');
        $sk3 = $this->input->post('skin3');
        $sk4 = $this->input->post('skin4');
        $sk5 = $this->input->post('skin5');
        $data['skin'] = ' | ' . $sk1 . ' | ' . $sk2 . ' | ' . $sk3 . ' | ' . $sk4 . ' | ' . $sk5 . '|';
        $ne1 = $this->input->post('neuro1');
        $ne2 = $this->input->post('neuro2');
        $ne3 = $this->input->post('neuro3');
        $ne4 = $this->input->post('neuro4');
        $ne5 = $this->input->post('neuro5');
        $ne6 = $this->input->post('neuro6');
        $ne7 = $this->input->post('neuro7');
        $ne8 = $this->input->post('neuro8');
        $ne9 = $this->input->post('neuro9');
        $data['neuro'] = ' | ' . $ne1 . ' | ' . $ne2 . ' | ' . $ne3 . ' | ' . $ne4 . '  | ' . $ne5 . ' | ' . $ne6 . ' | ' . $ne7 . ' | ' . $ne8 . ' | ' . $ne9;

        $ps1 = $this->input->post('psych1');
        $ps2 = $this->input->post('psych2');
        $ps3 = $this->input->post('psych3');
        $ps4 = $this->input->post('psych4');
        $ps5 = $this->input->post('psych5');
        $data['psych'] = ' | ' . $ps1 . ' | ' . $ps2 . ' | ' . $ps3 . ' | ' . $ps4 . ' | ' . $ps5 . '|';
        $end1 = $this->input->post('endo1');
        $end2 = $this->input->post('endo2');
        $end3 = $this->input->post('endo3');
        $end4 = $this->input->post('endo4');
        $end5 = $this->input->post('endo5');
        $data['endo'] = ' | ' . $end1 . ' | ' . $end2 . ' | ' . $end3 . ' | ' . $end4 . ' | ' . $end5 . '|';
        $he1 = $this->input->post('heme1');
        $he2 = $this->input->post('heme2');
        $he3 = $this->input->post('heme3');
        $data['heme'] = ' | ' . $he1 . ' | ' . $he2 . ' | ' . $he3 . ' | ';
        $im1 = $this->input->post('immu1');
        $im2 = $this->input->post('immu2');
        $im3 = $this->input->post('immu3');
        $data['immu'] = ' | ' . $im1 . ' | ' . $im2 . ' | ' . $im3 . ' | ';

        $this->db->insert('cons', $data);
    }

    public function Count() {
        return $this->db->count_all("cons");
    }

    public function getpationt($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("cons");
        return $query->result();
    }

    public function getContactByID($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("cons");
        return $query->result();
    }

    public function search() {
        $match = $this->input->post('search');
        $this->db->like('mrn', $match);
        $query = $this->db->get('cons');
        return $query->result();
    }

}

?>