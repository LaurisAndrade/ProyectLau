<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_tips extends CI_Model {
  function __construct(){
    parent::__construct();
  }

	function lista_tips(){

        $query = $this->db->select('*')
                          ->from('tips')
                          ->get();
        return $query;
	}
}
