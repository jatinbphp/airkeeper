<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_controller{

 function __construct() {
     parent::__construct();
   
    $this->load->model('house_model');
    }

 
 function index() {
 	$this->load->model('house_model');
 	$house=$this->house_model->all();
 	$data = array();
 	$data['house'] = $house;
 	$this->load->view('list',$data);
 }

 function create() {
 	$this->load->model('house_model');
 	$this->load->view('create');
 }


}