<?php
/* Smarty version 3.1.29, created on 2016-06-04 02:33:47
  from "Z:\home\site2.ru\www\views\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575205cb985e51_17379778',
  'file_dependency' => 
  array (
    '41d76371b913a18a5b2ff1ae08d7b469d4035008' => 
    array (
      0 => 'Z:\\home\\site2.ru\\www\\views\\header.tpl',
      1 => 1464973812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_575205cb985e51_17379778 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ru-RU">
<head>
<title>Dead-Cow Project / <?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
<meta charset="utf-8">
<link rel="stylesheet" href="/views/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="/views/css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="/views/css/grid.css" type="text/css" media="screen">
<link rel="stylesheet" href="/views/css/style2.css" type="text/css">

<?php echo '<script'; ?>
 src="/apps/jquery-1.7.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/moduls/intshop/js/scripts.js"><?php echo '</script'; ?>
>

</head>

<body id="page1">

<div class="l-wrapper">
<header class="l-header">
<nav class="site-nav">

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('my_php', array()); $_block_repeat=true; echo smarty_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 echo $topMenu=modelCommon::displayTopMenu(); <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


</nav>
</div>
</header>
</div>

<?php }
}
