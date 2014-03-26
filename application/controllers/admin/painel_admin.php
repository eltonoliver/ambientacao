<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Painel_admin extends CI_Controller {


	public function __construct(){
		   
	   parent::__construct();
	   $this->load->library('grocery_CRUD');
		
	}		

	public function index($id  =  null){

		try{
			$crud = new grocery_CRUD();

			$crud->set_crud_url_path(site_url('admin/painel_admin/index'));
			$crud->set_table('tbl_usuario');
			$crud->set_subject('Usuário');
			
			$crud->columns('id','nome','matricula','email','senha');

			$output = $crud->render();

			$this->template->load('admin/index','admin/templates/painel_admin',$output);	

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
		
		
	}

}

/* End of file painel_admin.php */
/* Location: ./application/controllers/admin/painel_admin.php */

