<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>CreationProject</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/Connection.css">
</head>
<body>
<div class="task-page">
	<div class="form">
		<?=form_open("ControllerCreationProject/createProject", ['class' => 'login-from']);?>
		<?= form_input(['type' => 'text', 'placeholder' => 'Project name', 'name' => 'nameProject']) ?>
		<?= form_input(['type' => 'text', 'placeholder' => 'Descriptif', 'name' => 'desc']) ?>
		<?= form_input(['type' => 'submit', 'value' => 'creer']) ?>
		<?php echo anchor('controllerCreationProject/project', 'retour') ?>
		<?= form_close() ?>
	</div>
</body>
</html>
