<?
Error_Reporting(E_ALL & ~E_NOTICE);
new cartController();

class cartController {

function __construct() {

    $smarty = commonClass::initSmarty();

    $segments = commonClass::parseURL();
    $itemsId = intval($segments[2]);

    if($segments[1] == 'addToCart') {
        $this->addToCartAction(intval($itemsId));
    }
    elseif($segments[1] == 'removeFromCart') {
        $this->removeFromCartAction(intval($itemsId));
    }
    else
        $this->indexAction($smarty);
}

//--------------------------------------------------------------------------------------------
// ИНДЕКС КОНТРОЛЛЕРА

    function indexAction($smarty) {

        $rsProducts = productsModel::getAllProductByArray();

            //Подгружаем корзину
            $smarty->assign('cartCntItems', count($_SESSION['cart']));

            //"Все" категории для правого меню
            $allCategories = categoriesModel::getAllCategoriesAction();
            $smarty->assign('allCategories', $allCategories);


        $smarty->assign('pageTitle', 'Корзина');
        $smarty->assign('rsProduct', $rsProducts);

        $smarty->display('header.tpl');
        $smarty->display('intshop_cart.tpl');
        $smarty->display('footer.tpl');

}






//--------------------------------------------------------------------------------------------
// Добавление товара в корзину

    function addToCartAction($itemId) {

        if( ! $itemId) return false;

        $resData = array();
        // Если значение не найдено, то добавляем
        if(isset($_SESSION['cart']) && array_search($itemId, $_SESSION['cart']) === false) {

            $_SESSION['cart'][] = $itemId;
            $resData['cntItems'] = count($_SESSION['cart']);
            $resData['success'] = 1;
        } else {
            $resData['success'] = 0;
        }
    echo json_encode($resData);
}

//--------------------------------------------------------------------------------------------
// Удаление товара из корзины

    function removeFromCartAction($itemId) {

        if( ! $itemId) return false;

        $resData = array();

        //Ишим ключ $itemId в сессии ( $_SESSION['cart'] )
        $key = array_search($itemId, $_SESSION['cart']);
        if($key !== false) {
            unset($_SESSION['cart'][$key]);
            $resData['success'] = 1;
            $resData['cntItems'] = count($_SESSION['cart']);
        }else {
            $resData['success'] = 0;
        }
        echo json_encode($resData);
    }
}