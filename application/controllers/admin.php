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
    public function editar_usuario($codigo_usuario){
    //Se invoca la consulta de la recomendacion y se la pasa un parametro el id
    $data['usuario_editar'] = $this->model_admin->form_usuario($codigo_usuario);
    $this->load->view('view_librerias');
    $this->load->view('view_form_nuevo',$data);
  }
  public function crear_nuevo(){
    //Se invoca la consulta de la recomendacion y se la pasa un parametro el id
    //$data['recomendacion_editar'] = $this->model_admin->form_recomendacion($codigo_recomendacion);
    $this->load->view('view_librerias');
    $this->load->view('view_form_nuevo');
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
  public function form_tip(){
    //print $codigo_tip;
    $this->load->view('view_librerias');
    $this->load->view('view_form_create_tips');
  }
  public function crear_tips(){

    //Validamos el metodo que sea un metodo post
    if($this->input->post()){

     //Ruta donde se guardan las imagenes
     $config['upload_path'] = $this->input->post("ruta_imagen");

     //Tipos de ficheros permitidos
     $config['allowed_types'] = 'jpg|png';    

     //Se pueden configurar aun mas parámetros.
     //Cargamos la librería de subida y le pasamos la configuración
     $this->load->library('upload', $config);

      if(!$this->upload->do_upload('foto')){
              
            show_404();    
      }
      else{
       
        $file_info = $this->upload->data();

          //Creamos un array para almacenar los datos del formulario
          $data = array(

                'nombre'=>$this->input->post("nombre"),
                'estado'=>$this->input->post("estado"),
                'foto'=>$config['upload_path'].'/'.$file_info['file_name']
                
          );

          //print_r($data);

          $respuesta = $this->model_admin->insertar_tips($data);

          $data['tips']= $this->model_admin->tips();
          $this->load->view('view_librerias');
          $this->load->view('view_admin_tips',$data);
          
          //header('Location: '.$_SERVER['HTTP_REFERER']); 
        }
  

      }
      else{

      show_404();
      }

  }
   public function editar_recomendaciones(){

    //Validamos el metodo que sea un metodo post
    if($this->input->post()){

     //Ruta donde se guardan las imagenes
     $config['upload_path'] = $this->input->post("ruta_imagenn");

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
          $data_update = array(
                'rec_codigo'=>$this->input->post("rec_codigo"),
                'rec_descripcion'=>$this->input->post("rec_descripcion"),
                'rec_estado'=>$this->input->post("rec_estado"),
                'rec_foto'=>$config['upload_path'].'/'.$file_info['file_name'],
          );

          print_r($data_update);

          $respuesta=$this->model_admin->update_recomendacion($data_update);

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
  public function editar_tip($codigo_tip){
    //Se invoca la consulta de la recomendacion y se la pasa un parametro el id
    $data['tip_editar'] = $this->model_admin->form_tip($codigo_tip);
    
    $this->load->view('view_librerias');
    $this->load->view('view_form_tips',$data);
  }
  //actulizar tip 
  
  public function update_tip(){

    //Validamos el metodo que sea un metodo post
    if($this->input->post()){

     //Ruta donde se guardan las imagenes
     $config['upload_path'] = $this->input->post("ruta_imagen");

     //Tipos de ficheros permitidos
     $config['allowed_types'] = 'jpg|png';    

     //Se pueden configurar aun mas parámetros.
     //Cargamos la librería de subida y le pasamos la configuración
     $this->load->library('upload', $config);

      if(!$this->upload->do_upload('foto')){
              
            show_404();    
      }
      else{
       
        $file_info = $this->upload->data();

          //Creamos un array para almacenar los datos del formulario
          $data = array(
                'id'=>$this->input->post("id"),
                'nombre'=>$this->input->post("nombre"),
                'estado'=>$this->input->post("estado"),
                'foto'=>$config['upload_path'].'/'.$file_info['file_name']
                
          );

          //print_r($data);

          $respuesta = $this->model_admin->update_tips($data);

          $data['tips']= $this->model_admin->tips();
          $this->load->view('view_librerias');
          $this->load->view('view_admin_tips',$data);
          
          //header('Location: '.$_SERVER['HTTP_REFERER']); 
        }
  

      }
      else{

      show_404();
      }

  }

}
