<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tips_ejercicio extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('Model_tips');
  }

	public function index()
	{
    $data['tips']= $this->Model_tips->lista_tips();
		$this->load->view('view_tips',$data);
	}
}