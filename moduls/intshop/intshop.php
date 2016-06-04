<?
//--------------------------------------------------------------------------------------------
// Фронт-контроллер модуля IntShop
//--------------------------------------------------------------------------------------------
Error_Reporting(E_ALL & ~E_NOTICE);

define('MOD_ROOT', ROOT.'/moduls/intshop/');

require_once MOD_ROOT.'components/functionsClass.php';
require_once MOD_ROOT.'models/productsModel.php';
require_once MOD_ROOT.'models/categoriesModel.php';

$smarty = commonClass::initSmarty();

//Если нет корзины в сессии, - регаем ее
if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
$smarty->assign('cartCntItems', count($_SESSION['cart']));

//"Все" категории для правого меню
$allCategories = categoriesModel::getAllCategoriesAction();
$smarty->assign('allCategories', $allCategories);


//--------------------------------------------------------------------------------------------
// Маршрутизатор модуля

    $url = commonClass::parseURL();

    if(count($url) != 0) {

        $controllerName = $url[0].'Controller.php';

        if(!@include_once MOD_ROOT.'/controllers/'.$controllerName) {

            $smarty->assign('errorText', 'Ошибка контроллера');

            $smarty->display('header.tpl');
            $smarty->display('error.tpl');
            $smarty->display('footer.tpl');

        }

    } else  {

        $allProducts = productsModel::getAllProducts();

        $smarty->assign('pageTitle', 'Интернет магазин');
        $smarty->assign('pageHtmlData', $allProducts);

        $smarty->display('header.tpl');
        $smarty->display('intshop_main.tpl');
        $smarty->display('footer.tpl');
    }


//--------------------------------------------------------------------------------------------











