<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('model_login');
  }
  public function ingreso(){

    $this->load->view('view_librerias');
    $this->load->view('view_ingreso');
  }
  public function see_login(){
    $this->load->view('view_librerias');
    $this->load->view('view_login');
  }
  public function valida_user(){
    $nombre_usuario=$this->input->post('nombre_usuario');
    $password_usuario=$this->input->post('password_usuario');
    $pass=md5($password_usuario);
    
    //validacion usuario
    $result=$this->model_login->valida_usuario($nombre_usuario, $pass);
    if($result->cuenta==1){
      //carga de datos Usuario
      $data_user=$this->model_login->consulta_usuario($nombre_usuario, $pass);

      $hola=array(
        'id'=>$data_user->usu_codigo,
        'nombres'=>$data_user->usu_nombre,
        'apellidos'=>$data_user->usu_apellidos,

      );
      print_r($hola);
      $this->session->set_userdata($hola);
      //$this->load->view('view_librerias');
      //$this->load->view('view_ingreso');
    }
    else{
      $this->load->view('view_librerias');
      $this->load->view('view_login');
    }

    function login_validate(){
      //Se obtienen los datos del formulario 
      $nombre_usuario=$this->input->post('nombre_usuario');
      $password_usuario=$this->input->post('password_usuario');
      $pass=md5($password_usuario);
      
      //Llamamos el modelo de login y llamamos la funcion valida_usuario a  la cual enviamos 2 parametros
      $response = $this->Login_model->valida_usuario($nombre_usuario, $pass);
         
      if($response){
  
        $data = array(
          "id_user_session" => $response->id_user,
          "name_user_session" => $response->name_user,
          "lastname_user_session" => $response->lastname_user,
          "id_rol_session" => $response->id_rol
          //"login" => TRUE
        );
  
       $this->session->set_userdata($data);
  
      }else{
  
          print "ERROR";
      }
  
    }

  }

}
