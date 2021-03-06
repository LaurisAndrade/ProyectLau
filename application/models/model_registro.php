<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_registro extends CI_Model {

	function __construct(){
    parent::__construct();
  }
  function insert_usuario($datos){
  	$this->db->insert('usuario',array(
			'usu_nombres'=>$datos['nombres'],
			'usu_apellidos'=>$datos['apellidos'],
			'usu_tipoidentificacion'=>$datos['tipo_identificacion'],
			'usu_numeroidentificacion'=>$datos['numero_identificacion'],
			'usu_alias'=>$datos['usuario'],
			'usu_contrasena'=>$datos['contra'],
			'usu_estado'=>$datos['estado'],
			'id_rol'=>$datos['rol'],
		));

  }
	function lista_usuario(){

        $query = $this->db->select('*')
                          ->from('usuario')
                          ->get();
        return $query;
	}

}
