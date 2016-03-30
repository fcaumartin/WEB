<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class de gestion des liens, gère les opérations CRUD
 *
 * @author	Author Name
 */
class liens extends CI_Controller {

	function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
    }

    /**
     * Affiche la vue liste des liens
     */
	public function index()
	{

		$data["liste"] = $this->db->query('SELECT * FROM liens');

		$this->load->view('header');
		$this->load->view('liens/vue_liste', $data);
		$this->load->view('footer');
	}

	/**
	 * 
	 */
	public function ajout()
	{
		$this->load->view('liens/vue_ajout');
	}

	public function modif($id)
	{
		$model["id"] = $id;
		$this->load->view('liens/vue_modif', $model);
	}


	public function script_ajout()
	{
		$data = $this->input->post();
		
		$str = $this->db->insert_string('Liens', $data);
		$this->db->simple_query($str);

		redirect('/liens/', 'location');
	}
}

