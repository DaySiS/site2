<?
	class modelDefault {
	
	
	function __construct($params=NULL) {
	
	//echo "Default MODEL<hr>";
	
			/*echo "<pre>";
			print_r($params);
			echo "</pre>";
	*/
	}
	

	
	public function GetData($params=NULL) {
	
		$razdel = $params[0];
		$subrazdel = substr($params[1],0,-5);
	
		if($params[0] == NULL || $params[0] == "index.php") {
		
		$query = mysql_query("SELECT * FROM `structure` WHERE `alias` = 'main' AND `pid` = 0 AND `access` = 1");
			$data = mysql_fetch_assoc($query);
			echo mysql_error();
			return $data;
		}
	
		if(count($params) < 2) {
			$query = mysql_query("SELECT * FROM `structure` WHERE `alias` = '$razdel' AND `pid` = 0 AND `access` = 1");
			$data = mysql_fetch_assoc($query);
			echo mysql_error();
		} else {
		
			$query_root_pid = mysql_query("SELECT `id` FROM `structure` WHERE `alias` = '$razdel' AND `pid` = 0");
			$root_pid = mysql_fetch_assoc($query_root_pid);
			echo mysql_error();
			
			$root_pid = $root_pid['id'];
		
			$query = mysql_query("SELECT * FROM `structure` WHERE `alias` = '$subrazdel' AND `access` = 1");
			$data = mysql_fetch_assoc($query);
			echo mysql_error();
			
		
		}
		
		/*
			echo "<pre>";
			print_r($params);
			echo "</pre>";
		
			echo "<pre>";
			print_r($data);
			echo "</pre>";
		
			echo "razdel - $razdel<br>";
			echo "sub razdel - $subrazdel<br>";
		*/
		
		
		
		
		

		if($data) return $data; else return false;
	}
	
	
	public function getRootTitle($params=NULL) {
	
		$razdel = $params[0];
	
			$query = mysql_query("SELECT `title`,`alias` FROM `structure` WHERE `alias` = '$razdel' AND `pid` = 0");
			$data = mysql_fetch_assoc($query);

			//echo mysql_error();
		
	
		return $data;
	
	
	
	}






	
}








?>