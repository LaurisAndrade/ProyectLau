<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('model_admin');
  }

  public function recomendaciones(){
    $data['recomendaciones']= $this->model_admin->recomendaciones();
    $this->load->view('view_librerias');
	  $this->load->view('view_admin_recomendaciones',$data);
  }
  public function tips(){
    $data['tips']= $this->model_admin->tips();
    $this->load->view('view_librerias');
    $this->load->view('view_admin_tips',$data);
  }
  public function editar_recomendacion($codigo_recomendacion){
    print $codigo_recomendacion;
    //$data['tips']= $this->model_admin->tips();
    //$this->load->view('view_librerias');
    //$this->load->view('view_admin_tips',$data);
  }

}
