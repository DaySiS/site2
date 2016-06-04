<?
	class ModulController {
	
	
	function __construct( $params=NULL ) {
	
	//echo "ModulController<hr>";
			
		if(@!include ROOT."/moduls/$params[0]/$params[0].php") {
			echo ("ModulController => Ошибка подключения модуля");
			//echo "<pre>";
			//print_r($params);
			//echo "</pre>";
	
		
		}
	}
	
	
	
	
	
	
	
}








?>