<?php
/* Smarty version 4.0.3, created on 2022-01-15 16:25:24
  from '/home/carlos/projetos/smarty/templates/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_61e31fa41a5065_20904331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9c2a1674e7f157bd18603b27a00af041474869a' => 
    array (
      0 => '/home/carlos/projetos/smarty/templates/view.tpl',
      1 => 1642274676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61e31fa41a5065_20904331 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Campus/Marcadores</h2>
<a href="insert.php">Inserir Novo</a>
<table class="table table-striped">
<tr>
<td>Name</td>
<td>Address</td>
<td>Latitude</td>
<td>Longitude</td>
<td>Type</td>
<td>Action</td>
</tr>
<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['marcas']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['marcas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
 </td>
<td><?php echo $_smarty_tpl->tpl_vars['marcas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['address'];?>
 </td>
<td><?php echo $_smarty_tpl->tpl_vars['marcas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lat'];?>
 </td>
<td><?php echo $_smarty_tpl->tpl_vars['marcas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['lng'];?>
 </td>
<td><?php echo $_smarty_tpl->tpl_vars['marcas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['type'];?>
 </td>
<td><a href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['marcas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">Update</a> | <a href="view.php?del=<?php echo $_smarty_tpl->tpl_vars['marcas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">Delete</a></td>
<?php
}
}
?>

</tr>
</table>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
