<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerCreationTaches extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("form");
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('modelCreationTaches');
	}
	public function index() {
		$this->load->view('viewCreationTaches');
	}

	public function  creationTaches(){
		$nom = $this->input->post('nom');
		$desc = $this->input->post('desc');
		$echeance = $this->input->post('echeance');
		$idProjectSelected =intval($this->session->userdata('idProjectSelected'));

		$this->modelCreationTaches->creation($nom,$desc,$echeance,$idProjectSelected);
		redirect('controllerCreationTaches');
	}
	public function  project(){
		redirect('controllerProject');
	}

}
