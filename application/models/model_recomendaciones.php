<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_recomendaciones extends CI_Model {
  function __construct(){
    parent::__construct();
  }

	function lista_recomendaciones(){

        $query = $this->db->select('*')
                          ->from('recomendaciones')
                          ->get();
        return $query;
	}
  
}
