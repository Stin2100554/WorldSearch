<h1 class="contentTitle">Map Viewer</h1>
<div id="contentWrapper">
	<div id="mapImage">
		<img src="https://maps.googleapis.com/maps/api/streetview?size=400x400
		&location=<?= esc($maps['LAT'])?>,<?= esc($maps['LNG'])?>
		&fov=<?= esc($maps['FOV'])?>
		&heading=<?= esc($maps['HEADING'])?>
		&pitch=<?= esc($maps['PITCH'])?>
		&key=AIzaSyAy338sKY_Uof2855ufwF9eOjLXJC_Y_RM">
	</div>

	<div id="infoboxWrapper">
		<div id="infobox">
		<hr>
			<h2>Date - <?= esc($maps['DATE'])?></h4>
		<hr>
		<dl>
			<dt>Latitude</dt>
			<dd><?= esc($maps['LAT'])?></dd>
			<dt>Longitude</dt>
			<dd><?= esc($maps['LNG'])?></dd>
			<dt>Country</dt>
			<dd><?= esc($maps['COUNTRY'])?></dd>
		</dl>
		<hr>
		<a href="https://www.google.com/maps/search/<?= esc($maps['LAT'])?>,<?= esc($maps['LNG'])?>">View on Google Maps</a>
		</div>
	</div>
</div>