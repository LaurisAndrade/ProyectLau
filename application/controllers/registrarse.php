<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrarse extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('model_registro');
  }
  public function form_registro(){
    $this->load->view('view_registro');
  }
  public function registro(){

    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $tipo_identificacion=$_POST['tipo_identificacion'];
    $numero_identificacion=$_POST['numero_identificacion'];
    $usuario=$_POST['usuario'];
    $contra=$_POST['contra'];
    $estado=1;
    $rol=2;
    $cntr=md5($contra);

    $datos=array(
      'nombres' => $nombres,
      'apellidos' => $apellidos,
      'tipo_identificacion' => $tipo_identificacion,
      'numero_identificacion' => $numero_identificacion,
      'usuario'=> $usuario,
      'contra'=> $cntr,
      'estado'=>$estado,
      'rol'=>$rol,
    );
    $reponse = $this->model_registro->insert_usuario($datos);
    $this->load->view('view_librerias');
    $this->load->view('view_login');
  }
}
