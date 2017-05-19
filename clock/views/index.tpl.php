<style type="text/css">
#w_clock_clock{
font-size: 3.8em;
}
</style>

<ul class="list-group no-margin"> 

<?php if($data['calendar']) { ?>
		
	<li class="list-group-item text-center">
		<i class="fa fa-calendar-o"></i>
		<span id="w_clock_calendar"></span>
		<script type="text/javascript">
			var date = new Date();﻿
			var jour = date.getDay();
			var nombre = date.getDate();
			var mois = date.getMonth();
			var annee = date.getFullYear();
			var array_jour = new Array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
			var array_mois = new Array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");

			document.getElementById('w_clock_calendar').innerHTML = array_jour[jour] + " " + nombre + " " + array_mois[mois] + " " + annee;
		</script>
	</li>	
	
<?php } ?>
	
<?php if($data['clock']) { ?>
		
	<li class="list-group-item text-center">
		<span id="w_clock_clock"></span>
		<script type="text/javascript">
			function heure() {
				var date = new Date();
				var heures = date.getHours();
				var minutes = date.getMinutes();
				var secondes = date.getSeconds();

				if (heures < 10){
					heures = '0' + heures;
				}

				if (minutes < 10){
					minutes = "0" + minutes;
				}

				if (secondes < 10){
					secondes = "0" + secondes;
				}

				document.getElementById('w_clock_clock').innerHTML = heures + ":" + minutes + ":" + secondes;

				setTimeout("heure()", 1000);
			}

			heure();
        </script>
	</li>
	
<?php } ?>

<?php if ($data['birthday']) { ?>
	<?php if ($data['birthdays']): ?>
			
	<li class="list-group-item text-center">
		<i class="fa fa-birthday-cake"></i> <b>Nous fêtons l'anniversaire de: </b>
	</li>
	
		<?php foreach ($data['birthdays'] as $birthday): ?>

			<li class="list-group-item">
				<i class="fa fa-gift "></i>
				<?php echo $this->user->link($birthday['user_id'], $birthday['username']); ?> <div class="pull-right">(<b><?php echo date_diff(date_create($birthday['date_of_birth']),date_create('today'))->y.' ans'; ?></b>)</div>
			</li>

		<?php endforeach; ?>
	
	<?php else: ?>
	 
		<li class="list-group-item text-center">
			<i class="fa fa-birthday-cake"></i> <b>Aucun anniversaire aujourd'hui...</b>
		</li>

	<?php endif; 
}
if ($data['evenement']) { 
	if ($data['evenements']): ?>

	<li class="list-group-item text-center">
		<b>Les événements du jour</b>
	</li>
	
	<?php 
		$inc=0;
		foreach ($data['evenements'] as $evenements): ?>

		<li class="list-group text-center">
			<a href="<?php echo url('events/'.$evenements['event_id'].'/'.url_title($evenements['title'])); ?>"><?php echo $evenements['title'];?></a> à <?php echo timetostr('%H:%M', $evenements['date']); ?><i>
	<?php 
		if ($evenements['date_end']!== NULL) {
			echo (icon('fa-hourglass-end').ceil((strtotime($evenements['date_end']) - strtotime($evenements['date'])) / 3600));?>h</i><?php
			}
	?>
		</li>
		
	<?php 
		$inc++;
		if ($inc == $data['nbevenement']){
			break;
		}
		endforeach; 
	else: ?>
	 
		<li class="list-group-item text-center">
			<b>Aucun événement aujourd'hui...</b>
		</li>

	<?php endif; 
} ?>
</ul>