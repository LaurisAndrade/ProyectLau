<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	function __construct(){
    parent::__construct();
  }
  function valida_usuario($user, $pass){
    $sql="SELECT COUNT(*) AS cuenta
            FROM usuario
            WHERE usu_alias='$user'
            AND usu_contrasena='$pass';";

      $query= $this->db->query($sql);
      //esto es para más de una fila
    //  return $query->result();
      return $query->row();

  }
  function consulta_usuario($user, $pass){
    $sql="SELECT * FROM usuario
            WHERE usu_alias='$user'
            AND usu_contrasena='$pass';";

      $query= $this->db->query($sql);
      //esto es para más de una fila
    //  return $query->result();
      return $query->row();

  }
}
