<?
//TODO: В коем-то веке перейти на PDO... -_-

	class dataBase {
	function __construct() {
        $dbSets = require ROOT."/config/db_settings.php";
		$this->dbConnect($dbSets);
	}
	private function dbConnect($dbSets){
        if(!mysql_connect($dbSets['host'],$dbSets['user'],$dbSets['password']))
		die("ОШИБКА: Немогу установить соединение с SQL сервером - ".mysql_error());
		if(!mysql_select_db($dbSets['dbname']))
		die("Немогу установить соединение с базой - ".mysql_error());
    }
}