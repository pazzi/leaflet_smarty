<?php
/* Smarty version 4.0.3, created on 2022-01-15 18:49:49
  from '/home/carlos/projetos/smarty/templates/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_61e3417d92a1a6_64264798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8da5852c994c373b32efdd9a7fb406c366a15a09' => 
    array (
      0 => '/home/carlos/projetos/smarty/templates/edit.tpl',
      1 => 1642283339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61e3417d92a1a6_64264798 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-3">
<h4>Editar - Campus (Marcadores)</h4>

<form method="POST" action="edit.php">
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['marca']->value[0]['id'];?>
">

<div class="mb-3 mt-3">
  Nome:
  <input type="text" class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['marca']->value[0]['name'];?>
">
</div>

<div class="mb-3 mt-3">
  Endereço:
  <input type="text" class="form-control" name="address" value="<?php echo $_smarty_tpl->tpl_vars['marca']->value[0]['address'];?>
">
</div>

<div class="mb-3 mt-3">
  Latitude:
  <input type="text" class="form-control" name="lat" value="<?php echo $_smarty_tpl->tpl_vars['marca']->value[0]['lat'];?>
">
</div>

<div class="mb-3 mt-3">
   Longitude
  <input type="text" class="form-control" name="lng" value="<?php echo $_smarty_tpl->tpl_vars['marca']->value[0]['lng'];?>
">
</div>

<div class="mb-3 mt-3">
  Tipo
  <input type="text" class="form-control" name="type" value="<?php echo $_smarty_tpl->tpl_vars['marca']->value[0]['type'];?>
">
</div>
 
  <input type="submit" class="btn btn-primary" name="submit" value="Editar">
  <input type="submit" class="btn btn-warning" name="cancel" value="Cancelar">

</form> 
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
