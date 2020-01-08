<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/Inscription.css">
	<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
</head>
<body>
<div class="main-w3layouts wrapper">
	<h1>Inscription</h1>
	<div class="main-agileinfo">
		<div class="agileits-top">
			<?= form_open('controllerInscription/inscription'); ?>
				<?= form_input(['class' => "text", 'type' => "text", 'placeholder' => "Username", 'name' => "login", 'required' => ""]) ?>
				<?= form_input(['class' => "text email", 'type' => "email", 'placeholder' => "Email", 'name' => "email", 'required' => ""]) ?>
				<?= form_input(['class' => "text", 'type' => "password", 'placeholder' => "Password", 'name' => "password", 'required' => ""]) ?>
				<div class="wthree-text">
					<div class="clear"> </div>
				</div>
				<?= form_input(['type' => "submit", 'value' => "SIGNUP"]) ?>
			<?= form_close(); ?>
			<p class="message">Deja inscrit ? <?php echo anchor('controllerInscription/connexion', ' Connectez vous !') ?></p>
		</div>
	</div>

	<ul class="colorlib-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
</body>
</html>
