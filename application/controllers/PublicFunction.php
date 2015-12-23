<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class PublicFunction  extends  CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Patient');
        $this->load->model('Admission');
    }

    public function index(){

    }
    public function CheckId($id)
    {
        $check = $this->Patient->CheckMRN($id);
        if($check == 1) {
            echo 1 ;
        }
    }

    public function PTInfo($id){
        $data['patient'] = $this->Patient->Find($id);
        $data['diagnosis'] = $this->Admission->LastAdmission($id);
        $this->load->view('layout/PTInfo',$data);
    }

    public function PatientId($id){
        $check = $this->Patient->CheckPatientId($id);
        if($check == 0){
            echo 1;
        }else{
            echo 0;
        }
    }
    function GetAge($mrn){
        $this->db->select('age');
        $this->db->where('id',$mrn);
        $query = $this->db->get('patient');
        echo $this->ageCalculator($query->result()[0]->age);
    }
    static function ageCalculator($dob){
        if(!empty($dob)){
            $birthdate = new DateTime($dob);
            $today   = new DateTime('today');
            $age = $birthdate->diff($today)->y;
            return $age;
        }else{
            return 0;
        }
    }
}
