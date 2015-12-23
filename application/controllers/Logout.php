<?php 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Logout extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('UserId')){
           redirect('/');
        }
    }
    
    public function index(){
        $this->session->sess_destroy();
        //var_dump($this->session->all_userdata());
        redirect('/');
    }
}