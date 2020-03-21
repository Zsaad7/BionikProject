<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gammes extends CI_Model {


public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}	


	public function GetGammesById()
	{

	    
		$this->db->order_by('gammes.id', 'desc');
		$gammes =$this->db->get('gammes');
					return $gammes->result();
				
	}

	
}

