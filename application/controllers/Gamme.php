<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gamme extends CI_Controller {


	public function index()
	{
		$data['content'] = 'gamme_view';
		$this->load->view('common/content', $data);

	}
}