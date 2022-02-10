<?php
/* Smarty version 4.0.3, created on 2022-02-10 14:19:21
  from '/home/carlos/projetos/leaflet_smarty/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_62054919f0eda3_05850561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7124ebe9a09562809514def7359342bc11dbc805' => 
    array (
      0 => '/home/carlos/projetos/leaflet_smarty/templates/index.tpl',
      1 => 1644031002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62054919f0eda3_05850561 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141107324862054919ef3137_90398698', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'main'} */
class Block_141107324862054919ef3137_90398698 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_141107324862054919ef3137_90398698',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="grid-container">
<div class="coluna1">
<div id="map" style="width: 900px; height: 600px;"></div>
<?php echo '<script'; ?>
>
	var map = L.map('map').setView([<?php echo $_smarty_tpl->tpl_vars['lat']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['lon']->value;?>
], 7);


	var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(map);


       <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['m_parte']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                 var marker = L.marker([<?php echo $_smarty_tpl->tpl_vars['m_parte']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lat'];?>
, <?php echo $_smarty_tpl->tpl_vars['m_parte']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lng'];?>
]).addTo(map) 
                         .bindPopup('<b><?php echo $_smarty_tpl->tpl_vars['m_parte']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</b><br /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m_parte']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['address'], ENT_QUOTES, 'UTF-8', true);?>
');
       <?php
}
}
?>

	function onMapClick(e) {
		popup
			.setLatLng(e.latlng)
			.setContent('You clicked the map at ' + e.latlng.toString())
			.openOn(map);
	}

	map.on('click', onMapClick);

<?php echo '</script'; ?>
>
</div>
<div class="coluna2">
	<form method="post" action="index.php">

	<div class="row">
		<div class="col-12"
			<label>Modalidade:</label>
			<select name="modalidade" <?php echo $_smarty_tpl->tpl_vars['f_status_modalidade']->value;?>
>
				<?php
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['modalidade']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total !== 0) {
for ($__section_j_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_1_iteration <= $__section_j_1_total; $__section_j_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['modalidade']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['modalidade']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['descricao'];?>
</option>
				<?php
}
}
?>
			</select>
			<input type="submit" name="escolher" value="Escolher" <?php echo $_smarty_tpl->tpl_vars['f_status_modalidade']->value;?>
>
		</div>
	</div>

	<div class="row">
		<div class="col-2>"
			<label>Curso:</label>
			<select name="curso" <?php echo $_smarty_tpl->tpl_vars['f_status_curso']->value;?>
>
				<?php
$__section_k_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['curso']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_k_2_total = $__section_k_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_k'] = new Smarty_Variable(array());
if ($__section_k_2_total !== 0) {
for ($__section_k_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] = 0; $__section_k_2_iteration <= $__section_k_2_total; $__section_k_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']++){
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['curso']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['curso']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_k']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_k']->value['index'] : null)]['nome'];?>
</option>
				<?php
}
}
?>
			</select>
			<input type="submit" name="escolher_curso" value="Escolher">
		</div>
	</div>

	</form>
	<div class="saida">
		<p><strong><?php echo $_smarty_tpl->tpl_vars['descricao']->value;?>
</strong></p>
		<ul>
			<?php
$__section_j_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['m_parte']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_3_total = $__section_j_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_3_total !== 0) {
for ($__section_j_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_3_iteration <= $__section_j_3_total; $__section_j_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
				<li><?php echo $_smarty_tpl->tpl_vars['m_parte']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['name'];?>
</li>
			<?php
}
}
?>
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
<?php
}
}
/* {/block 'main'} */
}
