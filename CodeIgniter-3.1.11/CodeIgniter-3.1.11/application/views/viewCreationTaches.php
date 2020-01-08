<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Projet</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/Connection.css">
</head>
<body>
<div class="task-page">
	<div class="form">
		<?= form_open('controllerCreationTaches/creationTaches', ['class' => 'login-form']); ?>
		<?= form_input(['type' => 'text', 'placeholder' => 'Task Name', 'name' => 'nom']) ?>
		<?= form_input(['type' => 'text', 'placeholder' => 'Descriptif', 'name' => 'desc']) ?>
		<?= form_input(['type' => 'date', 'placeholder' => 'dateLimite', 'name' => 'echeance']) ?>
		<?= form_input(['type' => 'submit', 'value' => 'creer']) ?>
		<?php echo anchor('controllerCreationTaches/project', 'retour') ?></p>
		<?= form_close() ?>

	</div>
</div>
</body>
</html>
