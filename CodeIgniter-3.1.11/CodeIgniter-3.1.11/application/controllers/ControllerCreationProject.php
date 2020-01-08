<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerCreationProject extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("form");
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('modelCreationProject');
	}

	public function index()
	{
		$this->load->view('viewCreationProject');
	}

	public function createProject()
	{
		$nameProject = $this->input->post('nameProject');
		$descProject = $this->input->post('descProject');

		$idUser = intval($this->session->userdata('idUser'));

		$this->modelCreationProject->insertProject($nameProject, $descProject, $idUser);

		$this->project();
	}

	public function  project()
	{
		redirect('controllerProject');
	}
}
