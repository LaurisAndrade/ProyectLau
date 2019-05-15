<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_ejercicio extends CI_Model {

	function __construct(){
    parent::__construct();
  }
  function insert_ejercicio($datos){
  	$this->db->insert('ejercicios',array(
			'nombre'=>$datos['nombre'],
			'descripcion'=>$datos['descripcion'],
			'estado'=>$datos['estado'],

		));

  }
  function listar_ejercicios(){

        $query = $this->db->select('*')
                          ->from('ejercicios')
                          ->get();
        return $query;
	}

}
