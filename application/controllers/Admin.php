<?php
/**
 * Created by PhpStorm.
 * User: PHP
 * Date: 4/4/2015
 * Time: 10:41 AM
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin  extends  CI_Controller{
    private $back ;
    public $data = [];
    function __construct() {
        parent::__construct();
        $this->back =@$_SERVER['HTTP_REFERER'];
        $this->load->model('User');
        $this->load->model('Section');
        $this->load->model('Role');
        if (!$this->session->userdata('UserId')) {
            redirect('/');
        } else {
            $access = $this->User->GetAccess($this->session->userdata('RoleId'));
            if ($access != 'Admin') {
                redirect($access);
            }
        }
    }

    public function index(){
        $this->data['UserInfo'] = $this->User->Find($this->session->userdata('UserId'));
        $this->data['title'] = 'Admin';
        $this->data['Url'] = 'Admin';
        $this->load->view('layout/head',$this->data);
        $this->load->view('layout/header',$this->data);
        $this->Menu();
        $this->load->view('layout/frame_load');
        $this->load->view('layout/footer');
    }
    public function Home(){
        $this->load->view('layout/style');
        $this->load->view('admin/home');
    }

    public function AddUser(){
        $this->load->view('layout/style');
        $data['sections'] = $this->db->get('section')->result();
        $data['roles'] = $this->db->get('role')->result();
        $this->load->view('admin/inc/addUser',$data);
    }

    public function Users($start = 0){
        $this->load->view('layout/style');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/Admin/Users';
        $config['total_rows'] = $this->User->Count();
        $config['per_page'] = 2;
        $this->pagination->initialize($config);
        $data['users'] = $this->User->GetPagination(2, $start);
        $data['links'] = $this->pagination->create_links();

        $data['Section'] = function($id){
            return $this->User->GetSection($id);
        };
        $data['Role'] = function($id){
            return $this->User->GetRole($id);
        };
        $this->load->view('admin/users',$data);
        $this->load->view('layout/script');
    }

    public function CreateUser(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('Section','Section','numeric|required');
        $this->form_validation->set_rules('Role','Role','numeric|required');
        $this->form_validation->set_rules('Name','Name','required|alpha');
        $this->form_validation->set_rules('Phone','Phone','required|numeric|is_unique[user.phone]');
        $this->form_validation->set_rules('UserName','UserName','required|is_unique[user.user_name]');
        $this->form_validation->set_rules('Password','Password','required|min_length:6');
        if($this->form_validation->run()){
            $this->load->model('User');
            $this->User->Create();
            $this->session->set_flashdata('done', 'Your User added');
            redirect($this->back);
        }else{
            $this->session->set_flashdata('error', validation_errors());
            redirect($this->back);
        }
    }

    public function FindUser($id){
        $this->load->view('layout/style');
        $data['user'] = $this->User->Find($id);
        $data['sections'] = $this->db->get('section')->result();
        $data['roles'] = $this->db->get('role')->result();
        $this->load->view('admin/inc/updateUser',$data);
    }

    public function UpdateUser($id){
        $this->User->Update($id);
        redirect($this->back);

    }

    public function DeleteUser($id){
        if($this->User->Delete($id)){
            echo 1;
        }else{
            echo 0;
        }
    }

    public function Sections($start = 0){
        $this->load->view('layout/style');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/Admin/Sections';
        $config['total_rows'] = $this->Section->Count();
        $config['per_page'] = 2;
        $this->pagination->initialize($config);
        $data['sections'] = $this->Section->GetPagination(2, $start);
        $data['links'] = $this->pagination->create_links();

        $data['UserCount'] = function($id){
            return $this->Section->UserCount($id);
        };
        $this->load->view('admin/sections',$data);
        $this->load->view('layout/script');
    }

    public function AddSection(){
        $this->load->view('layout/style');
        $this->load->view('admin/inc/addSection');
    }

    public function CreateSection(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('Section','Section','required|is_unique[section.title]');
        if($this->form_validation->run()){
            $this->Section->Create();
            $this->session->set_flashdata('done', 'Your Section added');
            redirect($this->back);
        }else{
            $this->session->set_flashdata('error', validation_errors());
            redirect($this->back);
        }
    }

    public function FindSection($id){
        $this->load->view('layout/style');
        $data['section'] = $this->Section->Find($id);
        $this->load->view('admin/inc/updateSection',$data);
    }

    public function UpdateSection($id){
        $this->Section->Update($id);
        redirect($this->back);
    }

    public function DeleteSection($id){
        if($this->Section->Delete($id)){
            echo 1;
        }else{
            echo 0;
        }
    }
    public function Roles($start = 0){
        $this->load->view('layout/style');
        $this->load->library('pagination');
        $config['base_url'] = base_url() . 'index.php/Admin/Roles';
        $config['total_rows'] = $this->Role->Count();
        $config['per_page'] = 2;
        $this->pagination->initialize($config);
        $data['roles'] = $this->Role->GetPagination(2, $start);
        $data['links'] = $this->pagination->create_links();

        $data['UserCount'] = function($id){
            return $this->Role->UserCount($id);
        };
        $this->load->view('admin/roles',$data);
        $this->load->view('layout/script');
    }

    public function AddRole(){
        $this->load->view('layout/style');
        $this->load->view('admin/inc/addRole');
    }

    public function CreateRole(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('Role','Role','required|is_unique[role.title]');
        $this->form_validation->set_rules('Access','Access','required');
        if($this->form_validation->run()){
            $this->Role->Create();
            $this->session->set_flashdata('done', 'Your Role added');
            redirect($this->back);
        }else{
            $this->session->set_flashdata('error', validation_errors());
            redirect($this->back);
        }
    }

    public function FindRole($id){
        $this->load->view('layout/style');
        $data['role'] = $this->Role->Find($id);
        $this->load->view('admin/inc/updateRole',$data);
    }

    public function UpdateRole($id){
        $this->Role->Update($id);
        redirect($this->back);
    }

    public function DeleteRole($id){
        if($this->Role->Delete($id)){
            echo 1;
        }else{
            echo 0;
        }
    }

    public function Active(){
        $table = filter_input(INPUT_GET,'table',FILTER_SANITIZE_STRING);
        $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);
        $active = filter_input(INPUT_GET,'active',FILTER_SANITIZE_STRING);
        $active = ($active == 1 ) ? 0 : 1 ;
        $this->db->where('id',$id);
        $data = ['active'=>$active];
        $this->db->update($table,$data);
        redirect($this->back);
    }
    private function Menu(){
        $url = base_url().'index.php/Admin/';
        $data['menu'] =  [
            0=>['title'=>'Home', 'url'=>$url.'Home', 'icon'=>'home','active'=>'active'],
            1=>['title'=>'Users', 'url'=>$url.'Users', 'icon'=>'user','active'=>''],
            2=>['title'=>'Sections', 'url'=>$url.'Sections' ,'icon'=>'th ','active'=>''],
            3=>['title'=>'Roles', 'url'=>$url.'Roles','icon'=>'lock ','active'=>''],
        ];
        $this->load->view('layout/menu',$data);
    }

}