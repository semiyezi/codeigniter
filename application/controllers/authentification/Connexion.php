<?php

class Connexion extends CI_Controller {

	public function index()
	{
		$this->load->view('authentification/connexion_step1');
	}
}
