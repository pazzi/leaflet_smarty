<?php
/* Smarty version 4.0.3, created on 2022-01-16 18:39:47
  from '/home/carlos/projetos/smarty/templates/curso_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_61e490a370ab31_85412334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '215aa20b40f4fbb96c4fadc2107f1834fceef3cd' => 
    array (
      0 => '/home/carlos/projetos/smarty/templates/curso_edit.tpl',
      1 => 1642369154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61e490a370ab31_85412334 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container mt-3">

<h2>Editar Curso</h2>

<form method="POST" action="curso_edit.php">
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['id'];?>
">

<div class="mb-3 mt-3">
  Nome:
  <input type="text" class="form-control" name="nome" value="<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['nome'];?>
">
</div>

<div class="mb-3 mt-3">
  Categoria:
  <input type="text"  class="form-control" name="categoria" value="<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['categoria'];?>
">
</div>

<div class="mb-3 mt-3">
  Nível:
  <input type="text" class="form-control"  name="nivel" value="<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['nivel'];?>
">
</div>

<div class="mb-3 mt-3">
  FIC:
  <select class="form-select" name="fic">
  <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['fics']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
  <?php if ($_smarty_tpl->tpl_vars['curso']->value[0]['fic'] == $_smarty_tpl->tpl_vars['fics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id']) {?>
  <option value="<?php echo $_smarty_tpl->tpl_vars['fics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['fics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['descricao'];?>
</option>
  <?php } else { ?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['fics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['fics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['descricao'];?>
</option>
  <?php }?>
  <?php
}
}
?>
  </select>
</div>

<div class="mb-3 mt-3">
  EJA:
  <input type="text"  class="form-control" name="eja" value="<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['eja'];?>
">
</div>

<div class="mb-3 mt-3">
  Duração:
  <input type="text" class="form-control"  name="duracao" value="<?php echo $_smarty_tpl->tpl_vars['curso']->value[0]['duracao'];?>
">
</div>

  <input type="submit" class="btn btn-primary"  name="submit" value="Editar">
  <input type="submit" class="btn btn-warning" name="cancel" value="Cancelar">

</form> 

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
