{extends file="layout.tpl"}
{block name=main}

<div class="grid-container">
<div class="coluna1">
<div id="map" style="width: 900px; height: 600px;"></div>
<script>
	var map = L.map('map').setView([{$lat}, {$lon}], 7);

{literal}
	var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(map);
{/literal}

       {section name=i loop=$m_parte}
                 var marker = L.marker([{$m_parte[i].lat}, {$m_parte[i].lng}]).addTo(map) 
                         .bindPopup('<b>{$m_parte[i].name}</b><br />{$m_parte[i].address|escape:"html"}');
       {/section}

	function onMapClick(e) {
		popup
			.setLatLng(e.latlng)
			.setContent('You clicked the map at ' + e.latlng.toString())
			.openOn(map);
	}

	map.on('click', onMapClick);

</script>
</div>
<div class="coluna2">
	<form method="post" action="index.php">

	<div class="row">
		<div class="col-12"
			<label>Modalidade:</label>
			<select name="modalidade" {$f_status_modalidade}>
				{section name=j loop=$modalidade}
				<option value="{$modalidade[j].id}">{$modalidade[j].descricao}</option>
				{/section}
			</select>
			<input type="submit" name="escolher" value="Escolher" {$f_status_modalidade}>
		</div>
	</div>

	<div class="row">
		<div class="col-2>"
			<label>Curso:</label>
			<select name="curso" {$f_status_curso}>
				{section name=k loop=$curso}
				<option value="{$curso[k].id}">{$curso[k].nome}</option>
				{/section}
			</select>
			<input type="submit" name="escolher_curso" value="Escolher">
		</div>
	</div>

	</form>
	<div class="saida">
		<p><strong>{$descricao}</strong></p>
		<ul>
			{section name=j loop=$m_parte}
				<li>{$m_parte[j].name}</li>
			{/section}
		</ul>
	</div>
</div>

<div class="coluna3">
xxxxx
</div>
<div class="coluna4">
xxxxx
</div>
</div>
{/block}