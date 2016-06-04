<?
	class NewsController {
	
	
	function __construct( $params=NULL ) {
	
	echo "NewsController<hr>";
	
		if($params == NULL) { $this->actionGetMainNews(); } else {
			if($params[1] == "index") { $this->actionGetAllNews(); }
			if($params[1] != "index") { $this->actionGetNewsByAlias($params); }
		}
/*			echo "<pre>";
			print_r($params);
			echo "</pre>";
	*/	
	}
	
	
	
	
	public function actionGetAllNews() {
	
	echo "Индекс модуля";
		
		return true;
	
	}
	
	
	public function actionGetNewsByAlias($params) {
	
		echo "Вытаскиваем конкретные данные модуля<br>";
			echo "<pre>";
			print_r($params);
			echo "</pre>";
		
		return true;
	
	}
	
		public function actionGetMainNews() {
	
		echo "Страница по умолку";
		
		return true;
	
	}
	
	
	}








?>