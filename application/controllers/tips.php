<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tips extends CI_Controller {

  function __construct(){
    parent::__construct();
  //  $this->load->model('model_tips');
  }
  public function tips_ejercicios(){
    $this->load->view('view_librerias');
    $this->load->view('view_tips');
  }


}
