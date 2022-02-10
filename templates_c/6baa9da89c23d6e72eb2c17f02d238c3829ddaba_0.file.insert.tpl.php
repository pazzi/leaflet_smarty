<?php
/* Smarty version 4.0.3, created on 2022-01-15 16:49:33
  from '/home/carlos/projetos/smarty/templates/insert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_61e3254d015c82_95030326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6baa9da89c23d6e72eb2c17f02d238c3829ddaba' => 
    array (
      0 => '/home/carlos/projetos/smarty/templates/insert.tpl',
      1 => 1641867588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61e3254d015c82_95030326 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

h2>Marcadores</h2>

<form method="POST" action="insert.php">
  First name:<br>
  <input type="text" name="name"><br>
  Last name:<br>
  <input type="text" name="address"><br>
   Last name:<br>
  <input type="text"  name="lat"><br>
   Last name<br>
  <input type="text"  name="lng"><br>
   Last name:<br>
  <input type="text"  name="type"><br><br>
 
  <input type="submit" name="submit" value="submit">
</form> 
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
