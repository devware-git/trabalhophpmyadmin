<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index() {

		$data['css'] = array(
			'bootstrap',
			'bootstra.mim',
			'modern-busines',
			'votacao' 
		);
		$data['js'] = array(
			'bootstrap',
			'bootstrap.mim',
			'contact_me',
			'jqBootstrapValidation',
			'jquery.easing.mim',
			'jquery'
		);

		$this->load->view('welcome_view', $data);
	}
}
?>