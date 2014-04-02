<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		
		parent::__construct();
	
	}
	
	public function index(){
		
		$this->load->view('admin/templates/login');	
	}

	public function logar(){
	
		try{

			$this->form_validation->set_rules('email', 'E-mail', 'required');
			$this->form_validation->set_rules('senha', 'Senha:', 'required');
			
			$campoEmBranco = '<div class="alert alert-warning"> O campo %s está em branco!</div>';
			$this->form_validation->set_message('required', $campoEmBranco);
				
			if ($this->form_validation->run() == FALSE){
				
				$this->index();
		
			}else{
			
				$this->session->set_flashdata('msg', 'Cadastrado com sucesso!');
				redirect("caminho/");
		
			}
			}catch(Exception $e){
				$this->session->set_flashdata('erro', $e->getMessage());
				redirect("caminho");
		
				
			}
		
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
