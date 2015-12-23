<?php

/**
 * Description of User
 *
 * @author PHP
 */
class Section extends CI_Model {

    protected $table = 'section';

    function Create() {
        $data = [
            'title' => $this->input->post('Section'),
        ];
        $this->db->insert($this->table, $data);
    }

    function GetAll() {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function Find($id) {
        $query = $this->db->get_where($this->table, ['id' => $id]);
        return @$query->result()[0];
    }

    function UserCount($id){
        $this->db->from('user');
        $this->db->where( 'section_id' , $id);
        return $this->db->count_all_results();
    }


    function Update($id) {
        $data = [
            'title' => $this->input->post('Section'),
        ];
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }

    function Delete($id) {
        $this->db->where('id', $id);
       return $this->db->delete($this->table);
    }

    public function Count() {
        return $this->db->count_all($this->table);
    }

    public function GetPagination($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);
        return $query->result();
    }

}
