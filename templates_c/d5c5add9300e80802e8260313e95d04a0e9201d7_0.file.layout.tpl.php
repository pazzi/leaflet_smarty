<?php
/* Smarty version 4.0.3, created on 2022-02-10 14:19:21
  from '/home/carlos/projetos/leaflet_smarty/templates/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_62054919f1eb18_37071545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5c5add9300e80802e8260313e95d04a0e9201d7' => 
    array (
      0 => '/home/carlos/projetos/leaflet_smarty/templates/layout.tpl',
      1 => 1644026020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62054919f1eb18_37071545 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="ptBR">
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="./style/mystyle.css" media="all"/>	
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <?php echo '<script'; ?>
 src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""><?php echo '</script'; ?>
>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <p class="navbar-brand"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</p>
  </div>
</nav>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20477897962054919f1e584_41330979', 'main');
?>

</body>
</html><?php }
/* {block 'main'} */
class Block_20477897962054919f1e584_41330979 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_20477897962054919f1e584_41330979',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'main'} */
}
