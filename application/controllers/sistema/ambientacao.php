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
				if($value->tbl_tipo_id == 3){/*QUESTOES*/
						/*FUNCAO TRATA QUESTOES*/
							$function = function( $dados ){

							$lista = explode(';', $dados);
							if(is_array($lista)){

								$lista = array_filter($lista);
							
							}
	
							
							return $lista;
						};
						/*FIM FUNCAO TRATA QUESTOES*/
						 

						$listaQuestoes = $function($value->conteudo);

						foreach (array_pop($listaQuestoes as $questao) {
							
							echo $questao."<br>";
						}
				

					echo ' 

						<div style="font-size:25px;font-weight: bold;color:white;" class="bg-primary"><center> '.$value->titulo.' </center></div> 

						<div class="bg-success" style="text-align:justify;padding:10px 10px 10px 10px ;">

							QUESTÕES

						</div>
						';
				}else{

					echo '

						<div style="font-size:25px;font-weight: bold;color:white;" class="bg-primary"><center> Título </center></div>
						<div class="bg-warning" style="text-align:justify;padding:10px 10px 10px 10px ;">
								Conteúdo <h1>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h1>
								
								<p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>
								
								<h2>Header Level 2</h2>
								
								<ol>
									<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
									<li>Aliquam tincidunt mauris eu risus.</li>
								</ol>
								
								<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote>
								
								<h3>Header Level 3</h3>
								
								<ul>
									<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
									<li>Aliquam tincidunt mauris eu risus.</li>
								</ul>
						
						
						</div>

					';	
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