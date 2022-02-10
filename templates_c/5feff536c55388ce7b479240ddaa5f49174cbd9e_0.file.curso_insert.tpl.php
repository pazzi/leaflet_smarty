<?php
/* Smarty version 4.0.3, created on 2022-01-16 18:39:02
  from '/home/carlos/projetos/smarty/templates/curso_insert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_61e49076023832_25899271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5feff536c55388ce7b479240ddaa5f49174cbd9e' => 
    array (
      0 => '/home/carlos/projetos/smarty/templates/curso_insert.tpl',
      1 => 1642369137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61e49076023832_25899271 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-3">

<h2>Cursos - novo</h2>

<form method="POST" action="curso_insert.php">
<div class="mb-3 mt-3">

  Nome:
  <input type="text"  class="form-control" name="nome">
<div class="mb-3 mt-3">
  Categoria:
  <input type="text"  class="form-control" name="categoria">
</div>

<div class="mb-3 mt-3">
   Nível:
  <input type="text"  class="form-control" name="nivel">
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
      <option value="<?php echo $_smarty_tpl->tpl_vars['fics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['fics']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['descricao'];?>
</option>
  <?php
}
}
?>
  </select>
</div>

<div class="mb-3 mt-3">
   EJA:
  <input type="text"  class="form-control" name="eja">
</div>

<div class="mb-3 mt-3">
    Duração:
  <input type="text"  class="form-control" name="duracao">
</div> 

  <input type="submit" class="btn btn-primary" name="submit" value="submit">
  <input type="submit" class="btn btn-warning" name="cancel" value="Cancelar">

</form> 

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
