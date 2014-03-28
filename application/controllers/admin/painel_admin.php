<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Painel_admin extends CI_Controller {

	private $idUser;

	public function __construct(){
		   
	   parent::__construct();

	   $this->load->library('grocery_CRUD');
	   $this->load->library('mineraDados');
		
	}

	public function index($id = null){

		$this->template->load('admin/index','admin/templates/home');	
	}		

	public function cadastraUsuario($id  = null){

		try{
			$crud = new grocery_CRUD();

			$crud->set_crud_url_path(site_url('admin/painel_admin/cadastraUsuario'));
			$crud->set_table('tbl_usuario');
			$crud->set_subject('Usuário');
			$crud->columns('id','nome','matricula','email','tbl_status_id');
			$crud->display_as('nome','Nome')->display_as('matricula','Matrícula')
				 ->display_as('email','E-mail')->display_as('senha','Senha')
				 ->display_as('tbl_status_id','Status')->display_as('id','Código');
			$crud->required_fields('nome','matricula','email','senha');
			$crud->set_relation('tbl_status_id','tbl_status','tipo');
			$crud->change_field_type('senha', 'password');
			$crud->unique_fields('matricula','matricula');
			$crud->set_rules('email','E-mail','valid_email');
			$crud->callback_before_insert(array($this,'encryptPassWordCallback'));
			$crud->callback_before_update(array($this,'encryptPassWordCallback'));
		
			$output = $crud->render();

			$this->template->load('admin/index','admin/templates/cadastra_usuario',$output);	

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}		
		
	}

	public function cadastraCategoria($id = null){

		try{
			/*ID USER*/
			$idUser = $this->setIdUser(11)->getIdUser();


			$crud = new grocery_CRUD();

			$crud->set_crud_url_path(site_url('admin/painel_admin/cadastraCategoria'));
			$crud->set_table('tbl_categoria');
			$crud->set_subject('Categoria');
			$crud->columns('id','nome');
			$crud->display_as('nome','Nome')->display_as('id','Código');
			$crud->required_fields('nome');
			
			$crud->unique_fields('nome','nome');
			$crud->field_type('tbl_usuario_id', 'hidden', $idUser);		
			$output = $crud->render();

			$this->template->load('admin/index','admin/templates/cadastra_categoria',$output);	


		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}

	}


	public function cadastraConteudo($id = null){
   		 try{
			/*ID USER*/
			$idUser = $this->setIdUser(11)->getIdUser();

			$crud = new grocery_CRUD();

			$crud->set_crud_url_path(site_url('admin/painel_admin/cadastraConteudo'));
			$crud->set_table('tbl_conteudo');
			$crud->set_subject('Conteúdo');
			$crud->columns('id','titulo','conteudo');
			$crud->display_as('id','Código')->display_as('titulo','Título')
				 ->display_as('conteudo','Conteúdo')->display_as('tbl_tipo_id','Tipo')
				 ->display_as('tbl_categoria_id','Categoria');
			$crud->required_fields('titulo','conteudo','tbl_tipo_id');
			$crud->set_relation('tbl_tipo_id','tbl_tipo','nome');
			$crud->set_relation('tbl_categoria_id','tbl_categoria','nome');
			$crud->field_type('tbl_usuario_id', 'hidden', $idUser);		
			$output = $crud->render();

			 $this->template->load('admin/index','admin/templates/cadastra_conteudo',$output);	


		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}	
		
	}

	public function leitura(){
				
				 $this->db->where('id',3); 	
		$dados = $this->db->get('tbl_conteudo')->result();

		foreach ($dados as $key => $value) {
			
			$array[] = explode(';', strip_tags($value->conteudo)) ;

		}

		


		/*$array = array_pop($array);
		$ultimo = count($array) - 2;

		$resposta = trim($array[$ultimo]);

		print_r($resposta);
		echo $resposta[1];*/
		echo '<pre>';
			 $n = new mineraDados();
		   foreach ($n->setArrayDados($array) as  $value) {
		   	$x = $value;
		    	print_r($value);

		    } 

		    echo $x[1];




		
	}


	/*RETURN ID USER*/
	public function setIdUser($id = null){

		$this->idUser = $id;
		return $this;

	}

	public function getIdUser(){

		return $this->idUser;

	}
	/*END RETURN USER*/

	/*FUNCTIONS CALLBACK*/

	public function encryptPassWordCallback($postArray = null) {
		  $this->load->library('encrypt');
		  $key = '#$%!&#*$(%*()(#$&$*$&*&*';
		  $postArray['senha'] = $this->encrypt->encode($postArray['senha'], $key);
		 
		  return $postArray;
	}

	/*END FUNCTIONS CALL BACK*/
}

/* End of file painel_admin.php */
/* Location: ./application/controllers/admin/painel_admin.php */