<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index() {

		$data['css'] = array(
			'bootstrap-grid',
			'bootstrap-grid.mim',
			'bootstrap-reboot',
			'bootstrap-reboot.mim',
			'bootstrap'
			);
		$data['js'] = array(
			'contact_me',
			'jqBootstrapValidation',
			'bootstrap.bundle',
			'bootstrap.bundle.mim',
			'bootstrap',
			'bootstrap.mim',
		);
		
		$this->load->view('home_view',$data);
		
		
	   
	}

	
}
?>