<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('Model_inicio');
  }

	public function images()
	{
    $data['images']= $this->Model_inicio->lista_images();
    $this->load->view('view_librerias');
		$this->load->view('view_principal',$data);
	}
}
