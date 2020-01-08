<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class modelCreationProject extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}

	public function insertProject($nameProject, $descProject, $idUser)
	{
		$sql = "INSERT INTO Project(nameProject,descProject) VALUES ('$nameProject', '$descProject')";
		$this->db->query($sql);

		$sql = "SELECT MAX(idProject) AS 'max' FROM Project;";
		$max = $this->db->query($sql)->result();
		$idProject = intval($max[0]->max);

		$sql = "INSERT INTO Droit VALUES ('$idUser', '$idProject', 'ADMIN')";
		$this->db->query($sql);

		$this->session->set_userdata('idProjectSelected', $idProject);
		$this->session->set_userdata('nomProjectSelected', $nameProject);
		$this->session->set_userdata('roleProjectSelected', "ADMIN");
	}

}
