<?php
/* Smarty version 3.1.29, created on 2016-06-04 02:36:28
  from "Z:\home\site2.ru\www\views\intshop_main.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5752066ce5f891_35032479',
  'file_dependency' => 
  array (
    '5a3e2d7be6a794acb5ef2d44e36d09e2459c8f92' => 
    array (
      0 => 'Z:\\home\\site2.ru\\www\\views\\intshop_main.tpl',
      1 => 1464993386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:intshop_menu.tpl' => 1,
  ),
),false)) {
function content_5752066ce5f891_35032479 ($_smarty_tpl) {
?>
<section id="content" style="margin-top: -60px;">
    <div class="main">
        <div class="container_12">

            <div class="wrapper">
                <article class="grid_8">
                        <h2><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('my_php', array()); $_block_repeat=true; echo smarty_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo ", бля";<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>
</h2>
        <p class="indent-bot2">

        <div style="border:0px solid #fff; float: right">

            <?php
$_from = $_smarty_tpl->tpl_vars['pageHtmlData']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_products_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products'] : false;
$__foreach_products_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_products'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
$__foreach_products_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>

        <a href="/intshop/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
            <div style="float: left; padding: 0 30px 40px 0;"><b><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</b><br>

                <img src="/userdata/intshop/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="170" height="170">


            </div>
        </a>

            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null) % 3 == 0) {?>
                <div style="clear: both"></div>
            <?php }?>

            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_products_0_saved_local_item;
}
if ($__foreach_products_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_products'] = $__foreach_products_0_saved;
}
if ($__foreach_products_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_products_0_saved_item;
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
