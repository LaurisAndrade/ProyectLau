<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargar_tips extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('Model_tips');
  }
  public function cargar_tips($id)
	{
    $response['descripcion'] = $this->Model_tips->cargar_tips($id);

    $response['datos_tips'] = $this->Model_tips->datos_tips($id);

		$this->load->view('view_tips',$response);
	}

}
