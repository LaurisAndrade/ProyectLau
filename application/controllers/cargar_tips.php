<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargar_tips extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('Model_ejercicio');
  }

	public function cargar_tips($id)
	{
    $response['descripcion'] = $this->Model_ejercicio->cargar_tips($id);

    $response['datos_ejercicio'] = $this->Model_ejercicio->datos_ejercicio($id);

		$this->load->view('view_descripcion',$response);
	}
}
