{extends file="layout.tpl"}
{block name=main}

<div class="grid-container">
<div id='map'></div>
<div>
<strong>Campus no estado:</strong>
<br>
{section name=i loop=$campi}
	<a href="./campi.php?id={$campi[i].id}&lat={$campi[i].latitude}&lon={$campi[i].longitude}&nome={$campi[i].cidade}">{$campi[i].nome}</a><br>
{/section}
</div>

<script>
var cities = L.layerGroup();
var eja = L.layerGroup();
var ead = L.layerGroup();
var eadPres = L.layerGroup();
var presencial = L.layerGroup();

{section name=i loop=$campi}
	L.marker([{$campi[i].latitude}, {$campi[i].longitude}]).bindPopup("{$campi[i].nome}.<br>{$campi[i].endereco}").addTo(cities);
{/section}

{section name=i loop=$eja}
	L.marker([{$eja[i].latitude}, {$eja[i].longitude}]).bindPopup("{$eja[i].campi}.<br>{$eja[i].endereco}").addTo(eja);
{/section}

{section name=i loop=$ead}
	L.marker([{$ead[i].latitude}, {$ead[i].longitude}]).bindPopup("{$ead[i].curso}.<br>{$ead[i].endereco}").addTo(ead);
{/section}

{section name=i loop=$eadPresencial}
	L.marker([{$eadPresencial[i].latitude}, {$eadPresencial[i].longitude}]).bindPopup("{$eadPresencial[i].curso}.<br>{$eadPresencial[i].endereco}").addTo(eadPres);
{/section}

{section name=i loop=$presencial}
	L.marker([{$presencial[i].latitude}, {$presencial[i].longitude}]).bindPopup("{$presencial[i].curso}.<br>{$presencial[i].endereco}").addTo(presencial);
{/section}


{literal}
	var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>';
	var mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

	var grayscale = L.tileLayer(mbUrl, {id: 'mapbox/light-v9', tileSize: 512, zoomOffset: -1, attribution: mbAttr});
	var streets = L.tileLayer(mbUrl, {id: 'mapbox/streets-v11', tileSize: 512, zoomOffset: -1, attribution: mbAttr});
	var satellite = L.tileLayer(mbUrl, {id: 'mapbox/satellite-v9', tileSize: 512, zoomOffset: -1, attribution: mbAttr});
	
{/literal}
    

	var map = L.map('map', {
		center: [{$lat}, {$lon}],
		zoom: 7,
		layers: [grayscale, cities]
	});

	var baseLayers = {
		'Grayscale': grayscale,
		'Streets': streets,
		'Satellite':satellite
	};

	var overlays = {
		'Campus do IFSP': cities
	
	};

	var layerControl = L.control.layers(baseLayers, overlays).addTo(map);

//	var crownHill = L.marker([-22.75, -48.09]).bindPopup('This is Crown Hill Park.');
//	var rubyHill = L.marker([-22.68, -48.00]).bindPopup('This is Ruby Hill Park.');

//	var parks = L.layerGroup([crownHill, rubyHill]);
//	layerControl.addOverlay(parks, 'Parks');

	layerControl.addOverlay(eja, 'EJA');
	layerControl.addOverlay(ead, 'EAD');
	layerControl.addOverlay(eadPres, 'EAD+Presencial');
	layerControl.addOverlay(presencial, 'Presencial');

</script>
{/block}
