<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		
		parent::__construct();
	
	}
	
	public function index(){
		
			$this->template->load('admin/index','admin/templates/login');	
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
