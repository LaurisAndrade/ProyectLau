<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_tips extends CI_Model {
  function __construct(){
    parent::__construct();
  }

	function lista_recomendaciones(){

        $query = $this->db->select('*')
                          ->from('tips')
                          ->get();
        return $query;
	}
/*  function cargar_chat($id){

    $query = $this->db->select('*')
                      ->from('chats')
                      ->where('ch_mensaje='.$id)
                      ->get();
    return $query;
	}
  function datos_contacto($id){

    $query = $this->db->select('*')
                      ->from('mensaje')
                      ->where('men_codigo='.$id)
                      ->get();
    return $query;
	}*/
}
