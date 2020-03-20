<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
	
		$data['content'] = 'home_view';
		$data['currentURL'] =  $this->router->fetch_class();
	
		$this->load->view('common/content', $data);

	}
}