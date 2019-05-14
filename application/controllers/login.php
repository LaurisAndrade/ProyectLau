<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('model_login');
  }
  public function index(){
    //Se valida si la Session ya esta iniciada o no 
    if($this->session->userdata('login')){
      $data['images']= $this->model_login->lista_images();
      $this->load->view('view_librerias');
      $this->load->view('view_principal',$data);   

    }else{

      $this->load->view('view_librerias');
      $this->load->view('view_login');

    }
  }
  public function ingreso(){
    $data['images']= $this->model_login->lista_images();
    $this->load->view('view_librerias');
		$this->load->view('view_principal',$data);
  }
  public function see_login(){
    $this->load->view('view_librerias');
    $this->load->view('view_login');
  }
  function valida_user(){
    //Se obtienen los datos del formulario 
    $nombre_usuario=$this->input->post('nombre_usuario');
    $password_usuario=$this->input->post('password_usuario');
    $pass=md5($password_usuario);
    
    //Llamamos el modelo de login y llamamos la funcion valida_usuario a  la cual enviamos 2 parametros
    $response = $this->model_login->valida_usuario($nombre_usuario, $pass);
       
    if($response){

      $data = array(
        "id_usuario" => $response->usu_codigo,
        "nombres_usuario" => $response->usu_nombres,
        "apellidos_usuario" => $response->usu_apellidos,
        "rol_usuario" => $response->id_rol,
        "login" => TRUE
      );

     $this->session->set_userdata($data);
     //print "Muy bien";
     redirect(base_url()."index.php/login/ingreso");

    }else{
      redirect(base_url()."index.php/login/see_login");
      //print "ERROR";
    }

  }
  public function logout(){
    
    $data = array('id_usuario','login'); 
    $this->session->unset_userdata($data);
    $this->session->sess_destroy();
    redirect(base_url()."index.php/login/see_login");

  }

}
