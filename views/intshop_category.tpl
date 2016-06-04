<section id="content" style="margin-top: -60px;">
<div class="main">
<div class="container_12">

<div class="wrapper">
    <article class="grid_8">
        <h2>{$pageTitle}</h2>
        <p class="indent-bot2">

        <div style="border:0px solid #fff; text-align: center;">

            {foreach $rsCategories as $item}
            <div style="float: left; margin: 20px">

                <a style="font-size: 24px;"
                   href="/intshop/category/{$item['id']}">

                <img style="margin-bottom: 20px" width="270" height="170"
                src="/userdata/intshop/categories/{$item['id']}.jpg"><br>
                {$item['name']}

                </a>

            </div>
            {/foreach}

        </div>

        </p>


        </article>


        {include file='intshop_menu.tpl'}


            </div>
        </div>
    </div>
</section>

