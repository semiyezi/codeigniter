<?php

class Inscription extends CI_Controller {


	public function index()
	{
		$this->load->view('authentification/inscription');
	}

	public function registration_form(){
        $this->load->model('authentification_model');
		$this->authentification_model->register_user();
        // $id = 123;
        redirect(base_url('index.php/authentification/connexion/index'));
	}


	public function login_form(){
		$this->authentification_model->login_user();
	}
    

}
