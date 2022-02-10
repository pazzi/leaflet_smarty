<?php
/* Smarty version 4.0.3, created on 2022-02-02 17:28:49
  from '/home/carlos/projetos/smarty/templates/cad_campus_curso.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_61fae981512cc8_81645737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e10f7e994312b0ecd3c9317cff61e9f77c9cfcc9' => 
    array (
      0 => '/home/carlos/projetos/smarty/templates/cad_campus_curso.tpl',
      1 => 1643833721,
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
function content_61fae981512cc8_81645737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-3">
<div class="row">
<div class="col">
<h4>Campus - <?php echo $_smarty_tpl->tpl_vars['cidade']->value;?>
</h4>
<h5>Cursos disponíveis:</h5>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Curso</th>
        <th>Modalidade</th>
      </tr>
    </thead>
    <tbody>
      <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['lista']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <tr>
            <td> <?php echo $_smarty_tpl->tpl_vars['lista']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nome'];?>
 </td><td><?php echo $_smarty_tpl->tpl_vars['lista']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['descricao'];?>
</td>
            </tr>
      <?php
}
}
?>
    </tbody>
  </table>

</div>
<div class="col">
<h5>Operações com cursos na modalidade:</h5>
<div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['modalidade']->value;?>
</div>
<form method="post" action="cad_campus_curso.php">
<input type="hidden" name="id_cidade" value="<?php echo $_smarty_tpl->tpl_vars['id_cidade']->value;?>
">
<input type="hidden" name="id_fic" value="<?php echo $_smarty_tpl->tpl_vars['id_fic']->value;?>
">
<div class="input-group mb-3">
<select class="form-select"  name="cadastrar">
<option value="0">Informe o curso </option>
<?php
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['curso_cad']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total !== 0) {
for ($__section_j_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_1_iteration <= $__section_j_1_total; $__section_j_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['curso_cad']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['curso_cad']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['nome'];?>
 </option>
<?php
}
}
?>
</select>
<input type="submit" class="btn btn-primary"  name="submit" value="Cadastrar">
</div>
<div class="input-group mb-3">
<select class="form-select"  name="remover">
<option value="0">Informe o curso </option>
<?php
$__section_j_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['curso_rem']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_2_total = $__section_j_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_2_total !== 0) {
for ($__section_j_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_2_iteration <= $__section_j_2_total; $__section_j_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['curso_rem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['curso_rem']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['nome'];?>
 </option>
<?php
}
}
?>
</select>
<input type="submit" class="btn btn-danger"  name="submit" value="Excluir">
</div>
<div class="input-group mb-3">
</form>
</div>
</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
