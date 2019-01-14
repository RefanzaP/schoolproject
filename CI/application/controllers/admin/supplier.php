<?php defined('BASEPATH') OR exit ('No direct script access');
class supplier extends CI_Controller{
   public function __construct(){
       parent::__construct();
        $this->load->model("supplier_model");
    }
   //public function index(){
      //  $data["supplier"] = $this -> supplier_model ->getAll(); 
        //var_dump($data["supplier"]);
    public function index(){
        $data["supplier"] = $this->supplier_model->getAll();
        $this->load->view("admin/supplier/list",$data);
    }
    }
