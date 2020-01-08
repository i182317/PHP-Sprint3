<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelProject extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function dataProjects($idUser) {
		$sql = "SELECT Project.idProject, nameProject, role FROM Project INNER JOIN Droit ON Project.idProject = Droit.idProject WHERE idUser = '$idUser'";

		return $this->db->query($sql)->result();
	}

	public function laterTask($idUser) {
		$date = date("Y-m-d");

		$sql = "SELECT COUNT(dateTask) AS nbDate FROM Droit INNER JOIN Project ON Droit.idProject = Project.idProject INNER JOIN Task ON Project.idProject = Task.idProject WHERE idUser = $idUser AND dateTask < '$date'";

		$nbLaterTask = $this->db->query($sql)->result();

		return $nbLaterTask[0]->nbDate;
	}

	public function taskFromProject($idProject) {
		$sql = "SELECT idTask, nameTask FROM task WHERE idProject = '$idProject'";

		return $this->db->query($sql)->result();
	}
}
