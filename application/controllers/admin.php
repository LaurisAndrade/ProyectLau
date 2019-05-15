<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('model_admin');
    $this ->load->helper ( array ( 'form' ,  'url' ));
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
    //Se invoca la consulta de la recomendacion y se la pasa un parametro el id
    $data['recomendacion_editar'] = $this->model_admin->form_recomendacion($codigo_recomendacion);
    //print_r($data['recomendacion_editar']);
    $this->load->view('view_librerias');
    $this->load->view('view_form_recomendaciones',$data);
  }
}
