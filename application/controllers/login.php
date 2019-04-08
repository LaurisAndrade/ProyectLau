<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('model_login');
  }
  public function ingreso(){
    $this->load->view('view_ingreso');
  }
  public function see_login(){
    $this->load->view('view_login');
  }
  public function valida_user(){
    $nombre_usuario=$this->input->post('nombre_usuario');
    $password_usuario=$this->input->post('password_usuario');
    $pass=md5($password_usuario);
    //echo  "PASSWORD ".$pass
    //validacion usuario
    $result=$this->model_login->valida_usuario($nombre_usuario, $pass);
    if($result->cuenta==1){
      //carga de datos Usuario
      /*$data_user=$this->model_login->consulta_usuario($nombre_usuario, $pass);
      $hola=array(
        'id'=>$data_user->usu_codigo,
        'nombres'=>$data_user->usu_nombre,
        'apellidos'=>$data_user->usu_apellidos,

      );
      $this->session->set_userdata($hola);*/
      //$this->load->view('view_ingreso');
      redirect(base_url()."index.php/login/ingreso");
    }
    else{
      $this->load->view('view_login');
    }

  //  $this->load->view('view_login');
  }

}
