<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gamme extends CI_Controller {


	public function __construct()
{
	parent::__construct();
	$this->load->model('gammes');


}

	public function index()
	{
		$data['content'] = 'gamme_view';
		$data['gammes'] = $this->gammes->GetGammesById();
		$data['currentURL'] =  $this->router->fetch_class();
		$this->load->view('common/content', $data);

	}
}