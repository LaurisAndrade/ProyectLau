<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_usuario extends CI_Model {
  function __construct(){
    parent::__construct();
  }

	function lista_usuario(){

        $query = $this->db->select('*')
                          ->from('usuario')
                          ->get();
        return $query;
	}

}
