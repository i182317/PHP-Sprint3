<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerProject extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("form");
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('modelProject');
	}

	public function index() {
		$pseudoUser = $this->session->userdata('pseudoUser');
		$idUser = $this->session->userdata('idUser');
		$nomProjectSelected = $this->session->userdata('nomProjectSelected');
		$roleProjectSelected = $this->session->userdata('roleProjectSelected');
		$idProjectSelected = $this->session->userdata('idProjectSelected');

		// affiche les projets de l'utilisateurs

		$listProject = array();

		$dataProjects = $this->modelProject->dataProjects($idUser);

		for($i = 0; $i < sizeof($dataProjects); $i++) {
			$idprojectaff = $dataProjects[$i]->idProject;
			$nomprojectaff = $dataProjects[$i]->nameProject;
			$role = $dataProjects[$i]->role;

                $project = array($nomprojectaff, $idprojectaff, $role);

                array_push($listProject, $project);
		}

		$data['listProject'] = $listProject;

		// affiche le nom ainsi que le nombre de taches en retard de l'utilisateur
		$nbRetard = $this->modelProject->laterTask($idUser);

		$nomRetard = "<p>$pseudoUser</p><p>Taches en retard : $nbRetard</p>";

		$data['nomRetard'] = $nomRetard;

		if($roleProjectSelected == "-1") {
			$data['nomProjectSelected'] = "";
			$data['roleProject'] = "-1";
		}
		else {
			$data['nomProjectSelected'] = $nomProjectSelected;
			$data['roleProject'] = $roleProjectSelected;

			$listTask = $this->modelProject->taskFromProject($idProjectSelected);

			$data['taskProjectSelected'] = $listTask;
		}


		// charge la vue
		$this->load->view('viewProject', $data);
	}

	public function deconnexion() {
		$this->session->sess_destroy();

		redirect('controllerConnexion');
	}

	public function selectProject($nomProject, $idProject, $role) {

		$this->session->set_userdata('idProjectSelected', $idProject);
		$this->session->set_userdata('nomProjectSelected', $nomProject);
		$this->session->set_userdata('roleProjectSelected', $role);

		$this->index();
	}

	public function modifyTask($idTask) {

	}

	public function addProject() {
		redirect('controllerCreationProject');
	}

	public function addTask()
	{
		$idProjectSelected = $this->session->userdata('idProjectSelected');
		if ($idProjectSelected != '-1' && $idProjectSelected != '') {
			redirect('controllerCreationTaches');
		}
		else {
			redirect('controllerProject');
		}
	}

	public function addCollab() {

	}

	public function suppCollab() {

	}
}
