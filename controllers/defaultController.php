<?
	include ROOT."/models/modelDefault.php";
	
	class DefaultController
    {

    function __construct($params = NULL)
    {
        $this->actionGetData($params);
    }

    public function actionGetData($params)
        {

            $pageData = new modelDefault();
            $allPageData = $pageData->GetData($params);


            $pageTitle = $allPageData['title'];
            $pageHtml = htmlspecialchars_decode($allPageData['full_html']);


            $smarty = commonClass::initSmarty();



            $smarty->assign('pageTitle', $pageTitle);
            $smarty->assign('pageHtml', $pageHtml);



            $smarty->display('header.tpl');
            if ($allPageData) $smarty->display('default_page.tpl');
            else $smarty->display('404.tpl');
            $smarty->display('footer.tpl');
    }
}