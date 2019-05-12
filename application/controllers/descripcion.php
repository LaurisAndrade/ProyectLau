<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Descripcion extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('Model_ejercicio');
  }

	public function index()
	{
    $data['descripcion']= $this->Model_ejercicio->lista_ejercicio();
		$this->load->view('view_inicio',$data);
	}
}
