<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		
		parent::__construct();
	
	}

	public function index(){

		$this->template->load('index','templates/home');	
	}

}

/* End of file index.php */
/* Location: ./application/controllers/index.php */