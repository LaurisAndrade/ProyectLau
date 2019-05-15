<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('model_admin');
    $this ->load->helper ( array ( 'form' ,  'url' )); 
  }

  public function recomendaciones(){
    $data['recomendaciones']= $this->model_admin->recomendaciones();
    $this->load->view('view_librerias');
	  $this->load->view('view_admin_recomendaciones',$data);
  }
  public function tips(){
    $data['tips']= $this->model_admin->tips();
    $this->load->view('view_librerias');
    $this->load->view('view_admin_tips',$data);
  }
  public function editar_recomendacion($codigo_recomendacion){
    //Se invoca la consulta de la recomendacion y se la pasa un parametro el id
    $data['recomendacion_editar'] = $this->model_admin->form_recomendacion($codigo_recomendacion);
    //print_r($data['recomendacion_editar']);    
    $this->load->view('view_librerias');
    $this->load->view('view_form_recomendaciones',$data);
  }
  public function edit_rec(){
    //se traen los datos de formulario
    $rec_codigo=$this->input->post('rec_codigo');
    $rec_descripcion=$this->input->post('rec_descripcion');
    $rec_estado=$this->input->post('rec_estado');
    $rec_foto=$this->input->post('rec_foto');
    //$this->cargar_imagen();
	  
      print "foto---->".$rec_descripcion;
  }
  public function crear_recomendaciones(){

    //Validamos el metodo que sea un metodo post
    if($this->input->post()){

     //Ruta donde se guardan las imagenes
     $config['upload_path'] = $this->input->post("ruta_imagen");

     //Tipos de ficheros permitidos
     $config['allowed_types'] = 'jpg|png';    

     //Se pueden configurar aun mas parámetros.
     //Cargamos la librería de subida y le pasamos la configuración
     $this->load->library('upload', $config);

     if(!$this->upload->do_upload('rec_foto')){
           
           show_404();    
     }
     else{
       
        $file_info = $this->upload->data();

          //Creamos un array para almacenar los datos del formulario
          $data = array(

                'rec_descripcion'=>$this->input->post("rec_descripcion"),
                'rec_estado'=>$this->input->post("rec_estado"),
                'rec_foto'=>$config['upload_path'].'/'.$file_info['file_name']
                
          );

          //print_r($data);

          $respuesta = $this->model_admin->insertar_recomendacion($data);

          $data['recomendaciones']= $this->model_admin->recomendaciones();
          $this->load->view('view_librerias');
          $this->load->view('view_admin_recomendaciones',$data);
          
          //header('Location: '.$_SERVER['HTTP_REFERER']); 
        }
  

      }
      else{

      show_404();
      }

  }
  public function form_recomendacion(){
    //print $codigo_tip;
    $this->load->view('view_librerias');
    $this->load->view('view_form_create_recomendaciones');
  }

}
