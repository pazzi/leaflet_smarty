<?php
/* Smarty version 4.0.3, created on 2022-02-01 21:08:56
  from '/home/carlos/projetos/smarty/templates/campus_curso.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_61f9cb98022dc4_02157489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46fbc369cc70eeca3fc7e2ab8afb92ea2df2d449' => 
    array (
      0 => '/home/carlos/projetos/smarty/templates/campus_curso.tpl',
      1 => 1643737260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61f9cb98022dc4_02157489 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container mt-3">

<h2>Escolher Campus e modalidade para inserir/remover:</h2>

<form method="POST" action="campus_curso.php">

<div class="mb-3 mt-3">
  Campus:
  <select class="form-select" name="Fcidade">
  <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cidades']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['cidades']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cidades']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</option>
  <?php
}
}
?>
  </select>
</div>

<div class="mb-3 mt-3">
  Modalidade:
  <select class="form-select" name="Ffic">
  <?php
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['fics']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total !== 0) {
for ($__section_j_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_1_iteration <= $__section_j_1_total; $__section_j_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['fics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['fics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['descricao'];?>
</option>
  <?php
}
}
?>
  </select>
</div>

  <input type="submit" class="btn btn-primary"  name="submit" value="Escolher">
  <input type="submit" class="btn btn-warning" name="cancel" value="Cancelar">

</form> 

</div>
<?php echo '<script'; ?>
>

<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
