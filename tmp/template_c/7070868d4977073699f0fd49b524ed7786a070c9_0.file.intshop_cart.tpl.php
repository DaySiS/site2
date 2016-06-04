<?php
/* Smarty version 3.1.29, created on 2016-06-04 02:34:37
  from "Z:\home\site2.ru\www\views\intshop_cart.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575205fded1d86_32044381',
  'file_dependency' => 
  array (
    '7070868d4977073699f0fd49b524ed7786a070c9' => 
    array (
      0 => 'Z:\\home\\site2.ru\\www\\views\\intshop_cart.tpl',
      1 => 1464975300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:intshop_menu.tpl' => 1,
  ),
),false)) {
function content_575205fded1d86_32044381 ($_smarty_tpl) {
?>
<section id="content" style="margin-top: -60px;">
    <div class="main">
    <div class="container_12">

    <div class="wrapper">
        <article class="grid_8">
            <h2><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</h2>
            <p class="indent-bot2"></p>


        <table cellspacing="0" cellpadding="15" width="100%">
        <tbody>
            <tr style="background-color: #0e0f0f">
                <td>№</td>
                <td>Наименование</td>
                <td>Кол-во</td>
                <td>Цена за ед.</td>
                <td>Итого</td>
                <td>Действия</td>
            </tr>

        <?php
$_from = $_smarty_tpl->tpl_vars['rsProduct']->value;
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

            <tr>
        <!-- Порядковый номер -->
                <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null);?>
</td>
        <!-- Наименование товара -->
                <td><a href="/intshop/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><b><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</b></a></td>
        <!-- Количество товара -->
                <td><input style="width: 30px; margin-top: -5px" type="text" value="1"></td>
        <!-- Цена за единицу -->
                <td align="right"><span style="color: #cc2700"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</span> руб.</td>
        <!-- Итого -->
                <td align="right"><span style="color: #cc2700">0</span> руб.</td>
        <!-- Действия -->
                <td><a href="#">удалить</a></td>

            </tr>




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







        </tbody>
        </table>

        </article>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:intshop_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



            </div>
        </div>
    </div>
</section>

<?php }
}
