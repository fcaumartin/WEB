<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {

	
	public function ajoute()
	{
		$this->load->view('clients_ajoute');
	}


	
}
