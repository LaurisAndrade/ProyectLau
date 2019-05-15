<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejercicios extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('model_ejercicio');
  }
  public function form_ejercicios(){
    $this->load->view('view_ejercicio');
  }
  public function ejercicio(){

    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];
    $estado=$_POST['estado'];


    $datos=array(
      'nombre' => $nombre,
      'descripcion' => $descripcion,
      'estado' => $estado,

    );
    $reponse = $this->model_ejercicio->insert_ejercicio($datos);

    $ejercicio['ejercicio'] = $this->model_ejercicio->listar_ejercicios();

    $this->load->view('view_librerias');
    $this->load->view('view_admin_ejercicio',$ejercicio);
  }

  public function agregar(){
    $ejercicio['ejercicio'] = $this->model_ejercicio->listar_ejercicios();
    $this->load->view('view_librerias');
    $this->load->view('view_admin_ejercicio',$ejercicio);
  }

}
