<section id="content" style="margin-top: -60px;">
    <div class="main">
    <div class="container_12">

    <div class="wrapper">
        <article class="grid_8">
            <h2>{$pageTitle}</h2>
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

        {foreach $rsProduct as $item name=products}

            <tr>
        <!-- Порядковый номер -->
                <td>{$smarty.foreach.products.iteration}</td>
        <!-- Наименование товара -->
                <td><a href="/intshop/product/{$item['id']}/"><b>{$item['name']}</b></a></td>
        <!-- Количество товара -->
                <td><input style="width: 30px; margin-top: -5px" type="text" value="1"></td>
        <!-- Цена за единицу -->
                <td align="right"><span style="color: #cc2700">{$item['price']}</span> руб.</td>
        <!-- Итого -->
                <td align="right"><span style="color: #cc2700">0</span> руб.</td>
        <!-- Действия -->
                <td><a href="#">удалить</a></td>

            </tr>




        {/foreach}







        </tbody>
        </table>

        </article>

        {include file='intshop_menu.tpl'}


            </div>
        </div>
    </div>
</section>

