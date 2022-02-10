<?php
/* Smarty version 4.0.3, created on 2022-01-15 15:40:30
  from '/home/carlos/projetos/smarty/templates/session.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_61e3151ef06227_31557649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64bafcf96aba41bd7077536a3c3fff98b7f3c089' => 
    array (
      0 => '/home/carlos/projetos/smarty/templates/session.tpl',
      1 => 1642272027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61e3151ef06227_31557649 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo $_smarty_tpl->tpl_vars['msg']->value;?>
 <br>

<div class="container mt-3">
 <h3>Validação de usuários</h3>
  <p>Insira o userid e senha e aperte "Login".</p>
<form method="POST" action="">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Username" name="username">
    </div>
    <div class="col">
      <input type="password" class="form-control" placeholder="Senha" name="passwd">
    </div>
    <div class="col">
    <button type="submit" class="btn btn-primary" name="login" value="Login">Login</button>
    </div>
  </div>
</form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
