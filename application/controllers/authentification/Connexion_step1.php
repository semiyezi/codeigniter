<?php

class Connexion_step1 extends CI_Controller
{

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

	public function index()
	{
		$this->load->view('authentification/connexion_step1');
	}

	public function connexion_redirect()
	{
		$email = $this->input->post('email1');
		redirect(URL.'index.php/authentification/connexion_step2/index/'.$email);
	}
}
