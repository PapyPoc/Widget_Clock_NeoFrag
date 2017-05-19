<div role="tabpanel">
	<ul id="navigation-tabs" class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#clock-options" aria-controls="clock-options" role="tab" data-toggle="tab"><?php echo icon('fa-cogs'); ?> Options</a></li>
        <li role="presentation"><a href="#apropos" aria-controls="apropos" role="tab" data-toggle="tab"><?php echo icon('fa-graduation-cap'); ?> A propos</a></li>
		</ul>
	<div class="tab-content">
		<div id="clock-options" class="tab-pane active" role="tabpanel">
			<div class="form-horizontal">
				<div class="form-group">
					<label for="settings-group" class="col-sm-6 control-label">Date</label>
					<div class="col-sm-3">
						<select class="form-control" name="settings[calendar]" id="settings-calendar">
							<option value="1"<?php if (!isset($data['calendar']) || $data['calendar'] == '1') echo ' selected="selected"'; ?>>Afficher</option>
							<option value="0"<?php if (isset($data['calendar']) && $data['calendar'] == '0') echo ' selected="selected"'; ?>>Masquer</option>
						</select>
						
					</div>
				</div>
				<div class="form-group">
					<label for="settings-group" class="col-sm-6 control-label">Horloge</label>
					<div class="col-sm-3">
						<select class="form-control" name="settings[clock]" id="settings-clock">
							<option value="1"<?php if (!isset($data['clock']) || $data['clock'] == '1') echo ' selected="selected"'; ?>>Afficher</option>
							<option value="0"<?php if (isset($data['clock']) && $data['clock'] == '0') echo ' selected="selected"'; ?>>Masquer</option>
						</select>
					
					</div>
				</div>
				<div class="form-group">
					<label for="settings-group" class="col-sm-6 control-label">Anniversaire</label>
					<div class="col-sm-3">
						<select class="form-control" name="settings[birthday]" id="settings-birthday">
							<option value="1"<?php if (!isset($data['birthday']) || $data['birthday'] == '1') echo ' selected="selected"'; ?>>Afficher</option>
							<option value="0"<?php if (isset($data['birthday']) && $data['birthday'] == '0') echo ' selected="selected"'; ?>>Masquer</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="settings-group" class="col-sm-6 control-label">Evenement</label>
					<div class="col-sm-3">
						<select class="form-control" name="settings[evenement]" id="settings-evenement">
							<option value="1"<?php if (!isset($data['evenement']) || $data['evenement'] == '1') echo ' selected="selected"'; ?>>Afficher</option>
							<option value="0"<?php if (isset($data['evenement']) && $data['evenement'] == '0') echo ' selected="selected"'; ?>>Masquer</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="settings-group" class="col-sm-6 control-label">Nombre d'évenement a afficher</label>
					<div class="col-sm-3">
						<select class="form-control" name="settings[nbevenement]" id="settings-nbevenement">
							<option value="1"<?php if (!isset($data['nbevenement']) || $data['nbevenement'] == '1') echo ' selected="selected"'; ?>>1</option>
							<option value="2"<?php if (isset($data['nbevenement']) && $data['nbevenement'] == '2') echo ' selected="selected"'; ?>>2</option>
							<option value="3"<?php if (isset($data['nbevenement']) && $data['nbevenement'] == '3') echo ' selected="selected"'; ?>>3</option>
							<option value="4"<?php if (isset($data['nbevenement']) && $data['nbevenement'] == '4') echo ' selected="selected"'; ?>>4</option>
							<option value="5"<?php if (isset($data['nbevenement']) && $data['nbevenement'] == '5') echo ' selected="selected"'; ?>>5</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div id="apropos" class="tab-pane" role="tabpanel">
			<li class="list-group-item">Crée par ArkaNiX.</li>
			<li class="list-group-item">Réalisé grace au <a title="tutoriel" href="https://neofr.ag/forum/topic/276/tuto-comment-faire-son-1er-widget.html">tutoriel</a> de Majiid. </li>   
			<li class="list-group-item">Avec l'aide d'eResnova pour la partie anniversaire.</li>
			<li class="list-group-item">Avec l'aide de FoxLey pour la V2.4.</li>
			<li class="list-group-item">Rajout des événements par Papy Poc</li>
		</div>
	</div>
</div>