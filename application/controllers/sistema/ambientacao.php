<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ambientacao extends CI_Controller {

	public function __construct(){
		
		parent::__construct();

		$this->load->library('grocery_CRUD');
	}

	public function index(){
		
		$this->template->load('sistema/index','sistema/templates/home');
	}

}

/* End of file system.php */
/* Location: ./application/controllers/system/system.php */

?>