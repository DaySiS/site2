<section id="content" style="margin-top: -60px;">
    <div class="main">
        <div class="container_12">

            <div class="wrapper">
                <article class="grid_8">
                        <h2>{$pageTitle}{my_php}echo ", бля";{/my_php}</h2>
        <p class="indent-bot2">

        <div style="border:0px solid #fff; float: right">

            {foreach $pageHtmlData as $item name=products}

        <a href="/intshop/product/{$item['id']}">
            <div style="float: left; padding: 0 30px 40px 0;"><b>{$item['name']}</b><br>

                <img src="/userdata/intshop/{$item['image']}" width="170" height="170">


            </div>
        </a>

            {if $smarty.foreach.products.iteration mod 3 == 0}
                <div style="clear: both"></div>
            {/if}

            {/foreach}
        </div>

        </p>


                </article>


                {include file='intshop_menu.tpl'}


            </div>
        </div>
    </div>
</section>

