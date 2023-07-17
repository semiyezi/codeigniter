<?php

class Inscription extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('authentification/inscription');
    }

    public function registration_form()
    {
        $this->load->model('authentification_model');
        $this->authentification_model->register_user();
        redirect(URL.'index.php/authentification/connexion_step1/index');
    }


    public function login_form()
    {
        $this->authentification_model->login_user();
    }
}
