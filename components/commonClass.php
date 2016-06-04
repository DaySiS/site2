<?php

/**
 * Created by DaySiS.
 * Developer: DaySiS
 * Date: 02.06.2016
 * Time: 18:38
 */
class commonClass
{
    static function dump($value = null, $die = 1){
            echo "<br>Debug: <br><pre><hr>";
            print_r($value);
            echo "<hr></pre>";
            if($die) die;
    }


    static function initSmarty()
    {

        $smarty = new Smarty();

        //Добавляем в SMARTY свои php-теги {my_php}{/my_php}

        if (!function_exists('smarty_php')) {
            function smarty_php($params, $content) {eval($content);}
            $smarty->registerPlugin('block', 'my_php', 'smarty_php');
        }

        $smarty->setTemplateDir(ROOT.'/views');
        $smarty->setCompileDir(ROOT.'/tmp/template_c');
        $smarty->setCacheDir(ROOT.'/tmp/cache');
        $smarty->setConfigDir(ROOT.'/apps/smarty/libs/configs');


        //commonClass::dump($smarty,0);
    return $smarty;
    }



    static function parseURL() {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        $segments = explode('/', $url);

        array_shift($segments);                     //сдвигаем массив влево на 1
        $segments = array_slice($segments, 0, 3);   //обрезаем до 3 елементов

        return ($segments);
    }

}