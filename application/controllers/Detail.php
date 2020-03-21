<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {


	public function index()
	{
		$data['content'] = 'detail_view';
		
		$data['currentURL'] =  $this->router->fetch_class();
		$this->load->view('common/content', $data);

	}
}