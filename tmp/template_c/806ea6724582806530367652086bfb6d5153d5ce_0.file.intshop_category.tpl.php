<?php
/* Smarty version 3.1.29, created on 2016-06-04 02:34:44
  from "Z:\home\site2.ru\www\views\intshop_category.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57520604399a94_69343796',
  'file_dependency' => 
  array (
    '806ea6724582806530367652086bfb6d5153d5ce' => 
    array (
      0 => 'Z:\\home\\site2.ru\\www\\views\\intshop_category.tpl',
      1 => 1464991256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:intshop_menu.tpl' => 1,
  ),
),false)) {
function content_57520604399a94_69343796 ($_smarty_tpl) {
?>
<section id="content" style="margin-top: -60px;">
<div class="main">
<div class="container_12">

<div class="wrapper">
    <article class="grid_8">
        <h2><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</h2>
        <p class="indent-bot2">

        <div style="border:0px solid #fff; text-align: center;">

            <?php
$_from = $_smarty_tpl->tpl_vars['rsCategories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
            <div style="float: left; margin: 20px">

                <a style="font-size: 24px;"
                   href="/intshop/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">

                <img style="margin-bottom: 20px" width="270" height="170"
                src="/userdata/intshop/categories/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
.jpg"><br>
                <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>


                </a>

            </div>
            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>

        </div>

        </p>


        </article>


        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:intshop_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



            </div>
        </div>
    </div>
</section>

<?php }
}
