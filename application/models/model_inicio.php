<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_inicio extends CI_Model {
  function __construct(){
    parent::__construct();
  }

	function lista_images(){

        $query = $this->db->select('*')
                          ->from('principal')
                          ->get();
        return $query;
	}
}
