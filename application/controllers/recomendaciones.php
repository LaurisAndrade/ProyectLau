<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recomendaciones extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('Model_recomendaciones');
  }

	public function index()
	{
    $data['recomendacion']= $this->Model_recomendaciones->lista_recomendaciones();
		$this->load->view('view_recomendaciones',$data);
	}
}
