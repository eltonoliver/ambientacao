<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ambientacao extends CI_Controller {

	public function __construct(){
		
		parent::__construct();

		$this->load->library('grocery_CRUD');
	}

	public function index(){
		/**************MENU****************/
		$dados['menu'] = $this->db->query(
			'
				SELECT
				tbl_conteudo.id,
				tbl_conteudo.titulo,
				tbl_conteudo.imagem,
				tbl_conteudo.conteudo,
				tbl_categoria.nome as catNome,
				tbl_categoria.id as catId,
				tbl_conteudo.tbl_tipo_id
				FROM
				tbl_categoria
				Inner Join tbl_conteudo ON tbl_categoria.id = tbl_conteudo.tbl_categoria_id
			'
		)->result();
		/**************MENU****************/
		$this->template->load('sistema/index','sistema/templates/home',$dados);
	}

}

/* End of file system.php */
/* Location: ./application/controllers/system/system.php */

?>