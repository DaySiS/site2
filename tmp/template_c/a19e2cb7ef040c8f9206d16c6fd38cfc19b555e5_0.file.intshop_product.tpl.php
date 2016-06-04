<?php
/* Smarty version 3.1.29, created on 2016-06-04 02:34:48
  from "Z:\home\site2.ru\www\views\intshop_product.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575206082775b6_17172667',
  'file_dependency' => 
  array (
    'a19e2cb7ef040c8f9206d16c6fd38cfc19b555e5' => 
    array (
      0 => 'Z:\\home\\site2.ru\\www\\views\\intshop_product.tpl',
      1 => 1464962057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:intshop_menu.tpl' => 1,
  ),
),false)) {
function content_575206082775b6_17172667 ($_smarty_tpl) {
?>
<section id="content" style="margin-top: -60px;">
    <div class="main">
        <div class="container_12">

            <div class="wrapper">
                <article class="grid_8">
                    <h2><?php echo $_smarty_tpl->tpl_vars['productData']->value['name'];?>
</h2>
                    <p class="indent-bot2">

                    <div style="margin: 30px; float: left; vertical-align: top">
                    <img src="/userdata/intshop/<?php echo $_smarty_tpl->tpl_vars['productData']->value['image'];?>
" width="300">
                    </div>

                    <div style="color: #ce0b0e; font-size:36px; margin: 30px; float: left">

                        <?php echo $_smarty_tpl->tpl_vars['productData']->value['price'];?>
 руб.

                        <br><br><br>
                        <center>
                            <span style="font-size: 16px; color: #ff6633;">

    <a href="#" id="addCart_<?php echo $_smarty_tpl->tpl_vars['productData']->value['id'];?>
"
       <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value) {?> class="hideme" <?php }?>
       onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['productData']->value['id'];?>
); return false;">Добавить в корзину</a>

    <a href="#" id="removeCart_<?php echo $_smarty_tpl->tpl_vars['productData']->value['id'];?>
"
            <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value) {?> class="hideme" <?php }?>
       onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['productData']->value['id'];?>
); return false;">Убрать из корзины</a>



                            </span>
                            <div id="test_ajax"></div>

                        </center>


                    </div>

                    <div style="clear: both">
                        <?php echo $_smarty_tpl->tpl_vars['productData']->value['description'];?>

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
