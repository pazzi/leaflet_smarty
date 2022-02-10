<?php
/* Smarty version 4.0.3, created on 2022-01-15 15:51:29
  from '/home/carlos/projetos/smarty/templates/inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_61e317b115bc49_55238421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f98533215effa5f00409c1148de24f5329b31bad' => 
    array (
      0 => '/home/carlos/projetos/smarty/templates/inicio.tpl',
      1 => 1642272676,
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
function content_61e317b115bc49_55238421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

Usuário autorizado <br>

<a href="inicio.php?act=logout">Logout</a>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
