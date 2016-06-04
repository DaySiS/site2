/**
 * Created by DaySiS on 01.06.2016.
 */


function addToCart(itemId){
    console.log("js - addToСart("+itemId+")");

    $.ajax({
        type: 'POST',
        //async: false,
        url: "/intshop/cart/addToCart/" + itemId + '/',
        dataType: 'json',
        success: function(data){

            if(data['success']) {

                $('#cartCntItems').html(data['cntItems']);

                $('#addCart_'+ itemId).hide();

                $('#removeCart_'+ itemId).show();

            } else alert('Ошибка JSON в массиве');
        }
    })
}

//--------------------------------------------------------------------------------------------

function removeFromCart(itemId){
    console.log("js - removeFromСart("+itemId+")");
    $.ajax({
        type: 'POST',
        //async: false,
        url: "/intshop/cart/removeFromCart/" + itemId + '/',
        dataType: 'json',
        success: function(data){
            if(data['success']) {

                $('#cartCntItems').html(data['cntItems']);

                $('#addCart_'+ itemId).show();

                $('#removeCart_'+ itemId).hide();

            } else alert('Ошибка JSON в массиве');
        }
    })
}

//--------------------------------------------------------------------------------------------
// Пересчет товара

function conversionPrice(itemId){
    var newCnt = $('#itemCnt_'+ itemId).val();
    var itemPrice = $('#itemPrice_'+ itemId).attr('value');
    var itemRealPrice = newCnt * itemPrice;

    if(isNaN(itemRealPrice)) itemRealPrice = ':-)';

    $('#itemRealPrice_'+ itemId).html(itemRealPrice);
}

//--------------------------------------------------------------------------------------------
