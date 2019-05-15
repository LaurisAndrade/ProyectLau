






<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {

	function __construct(){
    parent::__construct();
  }
  function recomendaciones(){
    $query = $this->db->select('*')
      ->from('recomendaciones')
      ->get();
     return $query;
  }
  function tips(){
    $query = $this->db->select('*')
                      ->from('tips')
                      ->get();
    return $query;
  }
  function form_recomendacion($codigo_recomendacion){
    $query = $this->db->select('*')
                      ->from('recomendaciones')
                      ->where('rec_codigo='.$codigo_recomendacion)
                      ->get();
    return $query;
  }
	function form_usuario($codigo_usuario){
		$query = $this->db->select('*')
											->from('usuario')
											->where('usu_codigo='.$codigo_usuario)
											->get();
		return $query;
	}
}
