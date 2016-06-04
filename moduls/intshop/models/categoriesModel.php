<?

class categoriesModel {

//------------------------------------------------------------------------------------------

static function getAllCategoriesAction() {

    $AllCategoriesData = array();

    $query = mysql_query("SELECT * FROM `intshop_categories` WHERE `parent_id` = 0");

    while ($row = mysql_fetch_assoc($query)) {

        $AllCategoriesData[] = $row;

        $query2 = mysql_query("SELECT * FROM `intshop_categories` WHERE `parent_id` = {$row['id']}");

            while($row2 = mysql_fetch_assoc($query2)) {

                $AllCategoriesData[] = $row2;
            }
    }
    return $AllCategoriesData;
}

//-----------------------------------------------------------------------------------------




}