<?php

/**
 * Description of User
 *
 * @author PHP
 */
class User extends CI_Model {

    protected $table = 'user';

    function Create() {
        $data = [
            'section_id' => $this->input->post('Section'),
            'role_id' => $this->input->post('Role'),
            'name' => $this->input->post('Name'),
            'phone' => $this->input->post('Phone'),
            'password' => md5($this->input->post('Password')),
            'user_name' => $this->input->post('UserName'),
            'active' => 1
        ];
        $this->db->insert($this->table, $data);
    }

    function Check() {
        $userName = $this->input->post('UserName');
        $password = md5($this->input->post('Password'));
        $query = $this->db->get_where($this->table, array('user_name' => $userName, 'password' => $password));
        return $query->num_rows();
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

    function InfoUser() {
        $query = $this->db->get_where($this->table, ['user_name' => $this->input->post('UserName')]);
        return $query->result();
    }

    function GetAccess($role) {
        $query = $this->db->get_where('role', ['id' => $role]);
        return $query->result()[0]->access;
    }

    function GetRole($id) {
        $query = $this->db->get_where('role', ['id' => $id]);
        return $query->result()[0]->title;
    }

    function GetSection($id){
        $query = $this->db->get_where('section', ['id' => $id]);
        return $query->result()[0]->title;
    }

    function GetUserSection(){
        $this->db->select('user.name');
        $this->db->select('section.title as section');
        $this->db->select('role.title as role');
        $this->db->from('user');
         $this->db->join('section','section.id = user.section_id');
        $this->db->join('role','role.id = user.role_id');
        $query = $this->db->get();
        echo '<pre>';var_dump($query->result());echo '</pre>';
    }

    function UpdateLastLogin($id) {
        $this->db->where('id',$id);
        $this->db->update($this->table,['last_login'=>time()]);
    }

    function Update($id) {
        $data = [
            'section_id'        => $this->input->post('Section'),
            'role_id'               => $this->input->post('Role'),
            'name'                 => $this->input->post('Name'),
            'phone'               => $this->input->post('Phone'),
            'user_name'     => $this->input->post('UserName'),
        ];
        if ($this->input->post('Password') != '') {
            $data['password'] = md5($this->input->post('Password'));
        }
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
        $this->db->select($this->table.'.*');
        $this->db->select('section.title as section');
        $this->db->select('role.title as role');
        $this->db->from('user');
        $this->db->join('section','section.id = user.section_id');
        $this->db->join('role','role.id = user.role_id');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }

}
