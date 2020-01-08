<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelInscription extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function checkNotExist($pseudoUser) {
		$sql = "SELECT idUser FROM user WHERE username = '$pseudoUser'";

		$rep = $this->db->query($sql)->result();
		$idUser = "-1";
		for($i = 0; $i < sizeof($rep); $i++) {
			$idUser = $rep[$i]->idUser;
		}

		if($idUser == "-1") {
			return true;
		}
		else {
			return false;
		}
	}

	public function inscription($pseudo, $password, $email) {
		$sql = "INSERT INTO user(username, password, email) VALUES ('$pseudo', '$password', '$email')";

		$this->db->query($sql);
	}
}
