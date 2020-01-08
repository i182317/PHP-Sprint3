<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelCreationTaches extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function creation($nom,$desc,$echeance,$idProjectSelected) {
		$sql = "INSERT INTO task(nameTask,descTask ,dateTask,idProject) VALUES ('$nom', '$desc', '$echeance',$idProjectSelected)";

		$this->db->query($sql);
	}
}
