<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Projet</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/Project.css">
	<?php echo anchor('controllerProject/deconnexion', 'Deconnexion') ?>
</head>
<body>

<div class="Profilecontainer">
	<div class="front">
		<div class="projet">
			<?php
				for($i = 0; $i < sizeof($listProject); $i++) {
					$nomProject = $listProject[$i][0];
					$idProject = $listProject[$i][1];
					$role = $listProject[$i][2];
					echo form_open("controllerProject/selectProject/$nomProject/$idProject/$role");
					echo form_input(['type' => "submit", 'value' => "$nomProject"]);
					echo form_close();
				}
			?>
		</div>
		<div>
			<a href="../modification_profile.html"><img src="https://upload.wikimedia.org/wikipedia/commons/f/f8/LOGO-ORIGINAL_WEB.jpg"/></a>
			<?php
				echo $nomRetard;
			?>
		</div>
	</div>
</div>

<div class="Profilecontahiner">
	<div class="task">
		<?php
			if($roleProject == "-1" or $roleProject == "") {
				echo "Pas de projet sélectionné";
			}
			else {
				echo "$nomProjectSelected ($roleProject)";
			}
		?>

		<div class="task">
			<?php
				if($roleProject != "-1" and $roleProject != "") {
					if(sizeof($taskProjectSelected) > 0) {
						for ($i = 0; $i < sizeof($taskProjectSelected); $i++) {
							$nameTask = $taskProjectSelected[$i]->nameTask;
							$idTask = $taskProjectSelected[$i]->idTask;
							echo form_open("controllerProject/modifyTask/$idTask");
							echo form_input(['type' => "submit", 'value' => "$nameTask"]);
							echo form_close();
						}
					}
					else {
						echo "pas de tache pour ce projet";
					}
				}
			?>
		</div>
	</div>
</div>
<footer>
	<?php echo anchor('controllerProject/addProject', 'Ajouter un projet') ?>
	<?php echo anchor('controllerProject/addTask', 'Ajouter une tache') ?>
	<?php echo anchor('controllerProject/addCollab', 'Ajouter collaborateur') ?>
	<?php echo anchor('controllerProject/suppCollab', 'Supprimer collaborateur') ?>
</footer>
</body>
</html>
