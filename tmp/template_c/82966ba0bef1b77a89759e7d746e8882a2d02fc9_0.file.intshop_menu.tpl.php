<?php
/* Smarty version 3.1.29, created on 2016-06-04 02:34:24
  from "Z:\home\site2.ru\www\views\intshop_menu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575205f0e7e162_18779450',
  'file_dependency' => 
  array (
    '82966ba0bef1b77a89759e7d746e8882a2d02fc9' => 
    array (
      0 => 'Z:\\home\\site2.ru\\www\\views\\intshop_menu.tpl',
      1 => 1464993262,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_575205f0e7e162_18779450 ($_smarty_tpl) {
?>
<article class="grid_4">
    <div class="indent-top">
        <h3 class="img-indent-bot">Каталог <?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('my_php', array()); $_block_repeat=true; echo smarty_php(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo ", бля";<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>
</h3>
        <div class="indent-left">
            <p class="indent-bot">Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. </p>



            <dl class="years">


    <?php
$_from = $_smarty_tpl->tpl_vars['allCategories']->value;
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

    <?php if ($_smarty_tpl->tpl_vars['item']->value['parent_id'] == 0) {?>
        <dt> </dt>
        <dd><a href="/intshop/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</b></a></dd>
        <?php } else { ?>
        <dt> </dt>
        <dd><a style="color: #777" href="/intshop/category/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">   <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></dd>

    <?php }?>


    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>









            </dl>
        </div>

        <br><br>

        <h3>

        <a href="/intshop/cart/" title="Перейти в корзину">Корзина</a>
            <span id="cartCntItems">
                <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value > 0) {
echo $_smarty_tpl->tpl_vars['cartCntItems']->value;
} else { ?>пусто<?php }?>
            </span>
        </h3>
    </div>
</article><?php }
}
