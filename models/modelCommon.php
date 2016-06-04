<?
	class modelCommon {
	
function __construct() {
	
	//echo "Default MODEL - ".ROOT. " - <hr>";
		
		//$this->display_menus();
	
}
	
//----------------------------------------------------------------------------------------------------------------------------
private function getTopMenu($parent = 0, $shiftleft = 0, $parent_alias = 0) {
		
		global $text;
		global $finish_result;

		$query = mysql_query("SELECT * FROM `structure` WHERE `pid` = '$parent' AND `st` = 1 ORDER BY `poz`") or die(mysql_error());
	 
		$shiftleft = "-".$shiftleft."px";
		
		if($parent != 0 AND mysql_num_rows($query) != 0) $text .= "<ul name='qwe' class='nav-inner' STYLE='left: $shiftleft'>";
	 
	if (mysql_num_rows($query) > 0) {

	 while ($row = mysql_fetch_array($query))
	 {
	 
		$http = "http://".HOST_NAME;
	 
		if($row['modul_type'] != 1) $row['alias'] = $row['modul_outlink']; 
	 
		$link = $row['alias'];
	 
		if($parent == 0) {
			$parent_alias = $row['alias'];
		}
		
		if($parent != 0) {
			$link = $parent_alias."/".$row['alias'].".html";
		}
		
		$shiftleft = $row['fld1'];
		
			if($row['pid'] == 0) $text .= "<li class='nav__item list-services'><a class='nav__link' href='$http/$link'>$row[title]</a>"; else
			$text .=  "<li class='nav-inner__item'><a class='nav-inner__link list-services' href='$http/$link'>$row[title]</a>";
			
				self::getTopMenu($row['id'],$shiftleft,$parent_alias);

				$text .= "</li>";
			} $text .=  "</ul>";
		
			$All .= $text;
			$text = '';

		}
		
		if($All) $finish_result[] = $All;
	return $finish_result;
}
//----------------------------------------------------------------------------------------------------------------------------

static function displayTopMenu() {
	$topMenuArr = self::getTopMenu();
	$topMenu = null;
	foreach ($topMenuArr as $val) {
		$topMenu .= $val;
	}
return $topMenu;
}






} //END CLASS



