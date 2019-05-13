<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Model_inicio');
	}

	public function inicio(){
	  $data['images']= $this->Model_inicio->lista_images();

		$this->load->view('view_librerias');
		$this->load->view('view_principal',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
