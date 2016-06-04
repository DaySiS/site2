<?

	class Router {

		private $routes;

		public function __construct() {

			$routesPath = ROOT.'/config/routes.php';
			$this->routes = include($routesPath);
			//Автозапуск
			$this->Run();
		}

		//Возвращает строку запроса
		private function getURI() {
			if(!empty($_SERVER['REQUEST_URI'])) {
				return trim($_SERVER['REQUEST_URI'], '/');
			}
		}

		//Достаем список модульных констант
		private function getModulsList() {
			$query = mysql_query("SELECT `type_source` FROM `moduls_list` WHERE `status` = 1");
				while($row = mysql_fetch_array($query)) {	$data[] = $row;	}
			return $data;
		}


		public function run() {

			$uri = $this->getURI();

		//Проверка на "Модуль" ---------------------------------------------

			$modulsList = $this->getModulsList();
			array_shift($modulsList);

			$seg_uri = explode('/', $uri);
			$mod_search_str = $seg_uri[0];

			//Аццкая функция
			$result = array_filter($modulsList,function($v) use ($mod_search_str) {
			return $v['type_source'] == $mod_search_str;
			});

			//Если это модуль - запускаем...
			if($result) {
				include ROOT."/controllers/ModulController.php";
				$ModController = new ModulController($seg_uri);
			}

			//----------------------------------------------------------------
			ELSE { //Всё остальное....


			//Сопоставление URI с паттерном из файла роутов
			foreach($this->routes as $uriPattern => $path) {

					if(preg_match("~$uriPattern~", $uri)) {

					$internalRoute = preg_replace("~$uriPattern~", $path, $uri);

					$seg = explode('/', $internalRoute);

					$controller_name = $seg[0];

					echo "ROUTER => Controller: $controller_name<hr><br>";

				break;

				}
			}



		//Если существует "прописанный" контролер, то запускаем его...

		if($controller_name != NULL){

		$controllerFile = ROOT.'/controllers/'.$controller_name.'Controller.php';

			if(file_exists($controllerFile)) {
					include($controllerFile);

			$class_name = $controller_name."Controller";

			$data = new $class_name($seg);

			} else echo "Ошибка файла контроллера"; //Если прописан в РУТЕ, но проблема с инклудой файла...

		}

		//Или же запускаем "дефолтный" контроллер

		else {

			$controllerFile = ROOT.'/controllers/DefaultController.php';
			include($controllerFile);

			$seg = explode('/', $uri);

			$data = new DefaultController($seg);

			}


			} // end ELSE

		} //END Run()



}
