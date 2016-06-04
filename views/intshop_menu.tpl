<article class="grid_4">
    <div class="indent-top">
        <h3 class="img-indent-bot">Каталог {my_php}echo ", бля";{/my_php}</h3>
        <div class="indent-left">
            <p class="indent-bot">Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. </p>



            <dl class="years">


    {foreach $allCategories as $item}

    {if $item['parent_id'] == 0}
        <dt> </dt>
        <dd><a href="/intshop/category/{$item['id']}"><b>{$item['name']}</b></a></dd>
        {else}
        <dt> </dt>
        <dd><a style="color: #777" href="/intshop/category/{$item['id']}">   {$item['name']}</a></dd>

    {/if}


    {/foreach}









            </dl>
        </div>

        <br><br>

        <h3>

        <a href="/intshop/cart/" title="Перейти в корзину">Корзина</a>
            <span id="cartCntItems">
                {if $cartCntItems > 0 }{$cartCntItems}{else}пусто{/if}
            </span>
        </h3>
    </div>
</article>