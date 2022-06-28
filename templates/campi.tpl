{extends file="layout.tpl"}
{block name=main}

<div class="grid-container">
<div id='map'></div>
<div>
<strong>Informações do Campus {$geral[0]['nomeCampi']}</strong>
<br>
Endereço: {$geral[0]['endereco']}
<br><br>Cursos oferecidos:
<table>
<tr><th>Curso</th><th>Tipo</th><th>Modalidade</th><th>Período</th></tr>
{section name=i loop=$geral}
	<tr><td>{$geral[i].curso}</td><td>{$geral[i].tipo}</td><td>{$geral[i].modalidade}</td><td>{$geral[i].periodo}</td></tr>
{/section}
</table>
<div><a href="index.php">Voltar</a></div>
</div>
</div>

<script type="text/javascript" src="../mapas/geojs_sp2.js"></script>

<script>

{literal}
	var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>';
	var mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

	var grayscale = L.tileLayer(mbUrl, {id: 'mapbox/light-v9', tileSize: 512, zoomOffset: -1, attribution: mbAttr});
	var streets = L.tileLayer(mbUrl, {id: 'mapbox/streets-v11', tileSize: 512, zoomOffset: -1, attribution: mbAttr});
{/literal}
    
	var map = L.map('map', {
		center: [{$lat}, {$lon}],
		zoom: 7,
		layers: [streets]
	});



	var baseLayers = {
		'Escala de Cinza': grayscale,
		'Normal': streets
	
	};

	var layerControl = L.control.layers(baseLayers).addTo(map);

{literal}
		var satellite = L.tileLayer(mbUrl, {id: 'mapbox/satellite-v9', tileSize: 512, zoomOffset: -1, attribution: mbAttr});
		layerControl.addBaseLayer(satellite, 'Satelite');
{/literal}

var campi_ar=[]
{section name=i loop=$campi}
	   campi_ar.push("{$campi[i].cidade|trim}")
{/section}

function getColor(d)
{ 
		if (d == "{$nome|trim}")
		{
			return "#f03b20"
		}
		else if(campi_ar.includes(d))
		{
			return "#99d8c9"
		}
		else
		{
			return "#edf8fb"
		}
	}

function style(feature) {
	return {
	weight: 0.2,
	opacity: 1,
	color: '#edf8fb',
	dashArray: '',
	fillOpacity: 0.5,
	fillColor: getColor(feature.properties.name)
	}
}

function highlightFeature(e) {
	var layer = e.target;

	layer.setStyle({
	weight: 5,
	color: '#666',
	dashArray: 0.0,
	fillOpacity: 0.7
	});
/*
	if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
	layer.bringToFront();
	}
*/
}

var geojson;


function resetHighlight(e) {
geojson.resetStyle(e.target);
}

function zoomToFeature(e) {
map.fitBounds(e.target.getBounds());
}

function onEachFeature(feature, layer) {
layer.on({
mouseover: highlightFeature,
mouseout: resetHighlight,
click: zoomToFeature
});
}


{literal}
var geojson = L.geoJson(statesData, {style: style,onEachFeature: onEachFeature}).addTo(map);
{/literal}

</script>
{/block}
