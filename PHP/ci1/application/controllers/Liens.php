<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Liens extends CI_Controller {

	
	public function liste () {

		$this->load->database();
		$this->load->helper('url');
		$requete = $this->db->query("select * from liens");

		$tableau = $requete->result();

		$model["titredelapage"] = "liste de liens";
		$model["liste"] = $tableau;

		$this->load->view('liens/liste', $model);
	}


	public function ajout () {

		$this->load->helper('url');
		

		$this->load->view('liens/ajout');
	}


	public function script_ajout () {

		$this->load->database();


		$titre = $this->input->post("titre");
		$webmaster = $this->input->post("webmaster");
		$this->db->query("insert into liens 
							(titre, webmaster) values 
							(?, ?)", array($titre, $webmaster));


		// $tab = $this->input->post();
		// $str = $this->db->insert_string("liens", $tab);
		// $this->db->query($str);

		$this->load->helper('url');
		
		redirect(site_url("liens/liste"));
	}



	public function detail($id, $nom) {

		//var_dump($this->input->get());

		var_dump($id);
		var_dump($nom);
		$this->load->view('liens/detail');
	}


	
}
