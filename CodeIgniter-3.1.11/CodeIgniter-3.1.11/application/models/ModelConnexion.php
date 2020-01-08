<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelConnexion extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function connexion($pseudoUser, $passwordUser) {
		$sql = "SELECT idUser FROM user WHERE username = '$pseudoUser' AND password = '$passwordUser'";

		$rep = $this->db->query($sql)->result();
		$idUser = "-1";
		for($i = 0; $i < sizeof($rep); $i++) {
			$idUser = $rep[$i]->idUser;
		}

		return $idUser;
	}
}
