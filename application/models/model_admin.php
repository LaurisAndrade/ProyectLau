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
  function form_tip($codigo_tip){
    $query = $this->db->select('*')
                      ->from('tips')
                      ->where('id='.$codigo_tip)
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
	function form_usuario($codigo_usuario){
		$query = $this->db->select('*')
											->from('usuario')
											->where('usu_codigo='.$codigo_usuario)
											->get();
		return $query;
  }
  function insertar_tips($data){

    //Preparamos nuestro codigo para insetar el registro
    $this->db->insert('tips',array(

        'nombre'=>$data['nombre'],
        'estado'=>$data['estado'],
        'foto'=>$data['foto']
        
      ));
  }
  function update_recomendacion($data_update){

    $this->db->set('rec_descripcion', $data_update["rec_descripcion"]);
    $this->db->set('rec_estado', $data_update["rec_estado"]);
    $this->db->set('rec_foto', $data_update["rec_foto"]);
    $this->db->where('rec_codigo', $data_update["rec_codigo"]);
    $this->db->update('recomendaciones');

    return $query;
  }
  function update_tips($data_update){

    $this->db->set('nombre', $data_update["nombre"]);
    $this->db->set('estado', $data_update["estado"]);
    $this->db->set('foto', $data_update["foto"]);
    $this->db->where('id', $data_update["id"]);
    $this->db->update('tips');

    return $query;
  }
  
}
