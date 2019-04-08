<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('model_login');
  }
  public function see_login(){
    $this->load->view('view_login');
  }
  public function valida_user(){
    $nombre_usuario=$this->input->post('nombre_usuario');
    $password_usuario=$this->input->post('password_usuario');
    $pass=md5($password_usuario);
    echo  "PASSWORD ".$pass;
    $result=$this->model_login->valida_usuario($nombre_usuario, $pass);
    if($result->cuenta==1){
      $data_user=$this->model_login->valida_usuario($nombre_usuario, $pass);
      $this->load->view('view_ingreso');
    }
    else{
      $this->load->view('view_login');
    }
    $hola=array(


    );
  //  $this->load->view('view_login');
  }

}
