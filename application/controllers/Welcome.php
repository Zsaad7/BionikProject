<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$data['currentURL'] =  $this->router->fetch_class();
		$this->load->view('welcome_message');
	}
}
