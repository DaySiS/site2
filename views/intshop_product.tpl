<section id="content" style="margin-top: -60px;">
    <div class="main">
        <div class="container_12">

            <div class="wrapper">
                <article class="grid_8">
                    <h2>{$productData['name']}</h2>
                    <p class="indent-bot2">

                    <div style="margin: 30px; float: left; vertical-align: top">
                    <img src="/userdata/intshop/{$productData['image']}" width="300">
                    </div>

                    <div style="color: #ce0b0e; font-size:36px; margin: 30px; float: left">

                        {$productData['price']} руб.

                        <br><br><br>
                        <center>
                            <span style="font-size: 16px; color: #ff6633;">

    <a href="#" id="addCart_{$productData['id']}"
       {if $itemInCart} class="hideme" {/if}
       onclick="addToCart({$productData['id']}); return false;">Добавить в корзину</a>

    <a href="#" id="removeCart_{$productData['id']}"
            {if !$itemInCart} class="hideme" {/if}
       onclick="removeFromCart({$productData['id']}); return false;">Убрать из корзины</a>



                            </span>
                            <div id="test_ajax"></div>

                        </center>


                    </div>

                    <div style="clear: both">
                        {$productData['description']}
                    </div>



                    </p>
                </article>


                {include file='intshop_menu.tpl'}


            </div>
        </div>
    </div>
</section>

