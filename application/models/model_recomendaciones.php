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
  function insertar_recomendacion($data){

    //Preparamos nuestro codigo para insetar el registro
    $this->db->insert('recomendaciones',array(

        'rec_descripcion'=>$data['rec_descripcion'],
        'rec_estado'=>$data['rec_estado'],
        'rec_foto'=>$data['rec_foto']
       
    ));
}
  
}
