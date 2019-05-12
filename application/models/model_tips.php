<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_ejercicio extends CI_Model {
  function __construct(){
    parent::__construct();
  }

	function lista_ejercicio(){

        $query = $this->db->select('*')
                          ->from('tips')
                          ->get();
        return $query;
	}
  function cargar_tips($id){

    $query = $this->db->select('*')
                      ->from('ejercicio')
                      ->where('idCTips='.$id)
                      ->get();
    return $query;
	}
  function datos_ejercicio($id){

    $query = $this->db->select('*')
                      ->from('tips')
                      ->where('id='.$id)
                      ->get();
    return $query;
  }
}
