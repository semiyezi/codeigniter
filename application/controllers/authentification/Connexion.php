<?php

class Connexion extends CI_Controller {

	public function index()
	{
		$this->load->view('authentification/connexion_step1');
	}

	public function connexion_step1($email){
		$email=$this->input->post('email1');
	}

}
