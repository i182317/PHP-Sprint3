<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerConnexion extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("form");
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('modelConnexion');
	}

	public function index() {
		$this->load->view('viewConnexion');
	}

	public function login() {
		$pseudo = $this->input->post('pseudo');
		$password = $this->input->post('password');
		$id = $this->modelConnexion->connexion($pseudo, $password);

		if($id != "-1") {
			$this->session->set_userdata('pseudoUser', $pseudo);
			$this->session->set_userdata('idUser', $id);
			redirect('controllerProject');
		}
		else {
			redirect('controllerConnexion');
		}
	}

	public function inscription() {
		redirect('controllerInscription');
	}
}
