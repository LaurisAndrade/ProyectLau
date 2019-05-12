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
  function valida_usuario($user, $pass){

    $this->db->where("email_user", $email);
    $this->db->where("password_user", $password);
        
     //Invocamos la tabla tb_users donde vamos a validar los datos
      $response = $this->db->get("tb_users");
        
    if ($response->num_rows()>0) {
            
            return $response->row();
            
    }else{
            
      return false;
    }
  }
  function consulta_usuario($user, $pass){
    $query = $this->db->select('*')
      ->from('usuario')
      ->where('usu_alias='.$user)
      ->where('usu_contrasena='.$pass)
      ->get(); 
     return $query;
  }
}
