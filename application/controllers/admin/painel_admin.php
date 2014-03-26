<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Painel_admin extends CI_Controller {


	public function __construct(){
		   
	   parent::__construct();
		
	}		

	public function index(){
		
		$this->template->load('admin/index','admin/templates/painel_admin');	
	}

}

/* End of file painel_admin.php */
/* Location: ./application/controllers/admin/painel_admin.php */

