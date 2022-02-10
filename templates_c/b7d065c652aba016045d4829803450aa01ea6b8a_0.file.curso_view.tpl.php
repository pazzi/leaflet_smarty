<?php
/* Smarty version 4.0.3, created on 2022-01-15 18:29:14
  from '/home/carlos/projetos/smarty/templates/curso_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_61e33caa8eecc3_35381143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7d065c652aba016045d4829803450aa01ea6b8a' => 
    array (
      0 => '/home/carlos/projetos/smarty/templates/curso_view.tpl',
      1 => 1642282135,
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
function content_61e33caa8eecc3_35381143 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2>Cursos</h2>
<a href="curso_insert.php">Inserir Novo</a>
<table class="table table-striped">
<tr>
<td>Nome</td>
<td>categoria</td>
<td>nivel</td>
<td>fic</td>
<td>eja</td>
<td>duração</td>
<td>Action</td>
</tr>
<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cursos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['cursos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nome'];?>
 </td>
<td><?php echo $_smarty_tpl->tpl_vars['cursos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['categoria'];?>
 </td>
<td><?php echo $_smarty_tpl->tpl_vars['cursos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nivel'];?>
 </td>
<td><?php echo $_smarty_tpl->tpl_vars['cursos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['descricao'];?>
 </td>
<td><?php echo $_smarty_tpl->tpl_vars['cursos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['eja'];?>
 </td>
<td><?php echo $_smarty_tpl->tpl_vars['cursos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['duracao'];?>
 </td>
<td><a href="curso_edit.php?id=<?php echo $_smarty_tpl->tpl_vars['cursos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">Update</a> | <a href="curso_view.php?del=<?php echo $_smarty_tpl->tpl_vars['cursos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
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
