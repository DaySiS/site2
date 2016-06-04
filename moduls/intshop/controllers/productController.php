<?
Error_Reporting(E_ALL & ~E_NOTICE);
new productController();

class productController
{
    function __construct(){

        $smarty = commonClass::initSmarty();

        $this->indexAction($smarty);

    }

    function indexAction($smarty){

        $url = commonClass::parseURL();
        $productId = intval($url[1]);

    if($productId) {

        $productData = productsModel::getProductById($productId);

        //Подгружаем корзину
        $smarty->assign('cartCntItems', count($_SESSION['cart']));

        //"Все" категории для правого меню
        $allCategories = categoriesModel::getAllCategoriesAction();
        $smarty->assign('allCategories', $allCategories);

        //Проверяем, нет ли текущего товара уже в корзине,
        //(флаг переключателя добавить/удалить)
        $smarty->assign('itemInCart', 0);
        if (in_array($url[1], $_SESSION['cart'])) {
            $smarty->assign('itemInCart', 1);
        }
        $smarty->assign('productData',$productData);

    } else {
        $controllerError = 1;
        $smarty->assign('errorText','Ошибка в контроллере');
        }

        $smarty->display('header.tpl');

        if(!$controllerError) $smarty->display('intshop_product.tpl');
        else $smarty->display('error.tpl');

        $smarty->display('footer.tpl');

    }


}