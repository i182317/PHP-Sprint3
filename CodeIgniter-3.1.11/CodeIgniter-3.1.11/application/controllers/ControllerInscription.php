<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerInscription extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("form");
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('modelInscription');
	}

	public function index() {
		$this->load->view('viewInscription');
	}

	public function inscription() {
		$pseudo = $this->input->post('login');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		if($this->modelInscription->checkNotExist($pseudo)) {
			$this->modelInscription->inscription($pseudo, $password, $email);
			redirect('controllerConnexion');
		}
		else {
			redirect('controllerInscription');
		}
	}

	public function connexion() {
		redirect('controllerConnexion');
	}
}
