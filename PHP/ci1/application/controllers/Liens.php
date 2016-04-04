<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Liens extends CI_Controller {

	
	public function liste()
	{
		$this->load->database();

		$model["liste"] = $this->db->query("select * from liens");
		$model["titre"] = "Liste des liens";

		$this->load->view('liste', $model);
	}


	public function ajout()
	{
		$this->load->view('form_ajout');
	}


	public function modif()
	{
		$this->load->view('welcome_message');
	}
}
