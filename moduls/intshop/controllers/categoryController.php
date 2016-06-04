<?

new categoryController();

class categoryController
{
    function __construct(){

        $smarty = commonClass::initSmarty();

       $this->indexAction($smarty);

    }


function indexAction($smarty){

    $query = mysql_query("SELECT * FROM `intshop_categories` WHERE `parent_id` = 0 ORDER BY `id`");

    $rsCategories = array();
    while($row = mysql_fetch_assoc($query)){    $rsCategories[] = $row; }


        //Подгружаем корзину
        $smarty->assign('cartCntItems', count($_SESSION['cart']));

        //"Все" категории для правого меню
        $allCategories = categoriesModel::getAllCategoriesAction();
        $smarty->assign('allCategories', $allCategories);


    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('pageTitle', 'Корневые категории');

    $smarty->display('header.tpl');
    $smarty->display('intshop_category.tpl');
    $smarty->display('footer.tpl');








}





}






