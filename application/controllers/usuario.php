<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('Model_usuario');
  }

	public function user()
	{

    $data['usuario']= $this->Model_usuario->lista_usuario();
    $this->load->view('view_librerias');
		$this->load->view('view_usuario',$data);
	}
}
