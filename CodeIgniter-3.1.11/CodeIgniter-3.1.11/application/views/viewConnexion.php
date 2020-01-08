<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Connexion</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/Connection.css">
</head>
<div class="login-page">
	<div class="form">
		<?= form_open('controllerConnexion/login', ['class' => 'login-form']); ?>
			<?= form_input(['type' => 'text', 'placeholder' => 'username', 'name' => 'pseudo']) ?>
			<?= form_input(['type' => 'password', 'placeholder' => 'password', 'name' => 'password']) ?>
			<?= form_input(['type' => 'submit', 'value' => 'connexion']) ?>
			<p class="message">Pas inscrit ? <?php echo anchor('controllerConnexion/inscription', 'Creer un compte') ?></p>
		<?= form_close() ?>
	</div>
</div>
</html>
