<h1 class="contentTitle">Previous Maps</h1>
<div id="contentWrapper">
	<div id="archiveList" style="width:100%">
		<?php if(!empty($maps) && is_array($maps)):?>
			<?php foreach($maps as $eachMap):?>
				<div class="archiveListing">
					<h4 class="arListCountry"><?= esc($eachMap['COUNTRY'])?></h4>
					<p class="arListDate">Date Shown - <b><?= esc($eachMap['DATE'])?></b></p>
					<p class="arListLocation"><i><?= esc($eachMap['LAT'])?>, <?= esc($eachMap['LNG'])?></i></p>
					<a href="<?= base_url('/map/view')?>/<?= esc($eachMap['ID'])?>">View full page</a> |
					<button id="BTN<?= esc($eachMap['ID'])?>"onclick="getAJAXmap(<?= esc($eachMap['ID'])?>)">Preview Location</button><br>
					<div id="IMG<?= esc($eachMap['ID'])?>">
						
					<hr>
				</div></div>
			<?php endforeach ?>
		<?php else: ?>
			<h3>Failed to load records.</h3>
			
		<?php endif ?>
	</div>
</div>
<script>
	function getAJAXmap(id = 1) {
		var target = "IMG" + id;
		var button = "BTN" + id;
		
		fetch(<?= '"', base_url('index.php/map/ajaxView'), '/"'?> + id)
		.then(response => response.json())
		.then(response => {
		//Look at this monolith. I am too scared to change it.
			console.log(response);
			document.getElementById(target).innerHTML = 
			"<img src='https://maps.googleapis.com/maps/api/streetview?size=300x300&location=" + response.LAT + "," + response.LNG + "&fov=" + response.FOV + "&heading=" + response.HEADING + "&pitch=" + response.PITCH + "&key=AIzaSyAy338sKY_Uof2855ufwF9eOjLXJC_Y_RM'>";
			document.getElementById(button).disabled = true;
		})
		.catch(err => {
			document.getElementById(target).innerHTML = "Failed to load image!";
		});
	}
</script>

