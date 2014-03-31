<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ambientacao extends CI_Controller {

	public function __construct(){
		
		parent::__construct();

		$this->load->library('grocery_CRUD');
	}

	public function index(){
		
		$this->template->load('sistema/index','sistema/templates/home');
	}

	public function slide($id = null){

				 $this->db->where('id', $id);
		$dados = $this->db->get('tbl_conteudo')->result();
		foreach ($dados as $value) {
			
			if(isset($value->conteudo) && !empty($value->conteudo)){

/****************************************************************************/					
				if($value->tbl_tipo_id == 3){


					echo " QUESTÕES ";
				}else{

					echo "Conteúdo";	
				}

				

			}else{


				echo '<img src="'.base_url().'assets/uploads/conteudo/'.$value->imagem.'" />';



			}
/****************************************************************************/				
		}
	}

}

/* End of file system.php */
/* Location: ./application/controllers/system/system.php */

?>