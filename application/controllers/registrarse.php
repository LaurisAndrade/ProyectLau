<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrarse extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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


    $this->load->view('view_login');
  }
}