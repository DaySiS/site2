<?

class productsModel
{

    static function getAllProducts(){

        $query = mysql_query("SELECT * FROM `intshop_products` ORDER BY `id` DESC LIMIT 9");
        echo mysql_error();

        while($row = mysql_fetch_assoc($query)){
            $allProducts[] = $row;
        }

      return $allProducts;
    }


    static function getProductById($idProduct){
        $idProduct = intval($idProduct);
        $query = mysql_query("SELECT * FROM `intshop_products` WHERE `id` = {$idProduct}");
      return mysql_fetch_assoc($query);
    }

    static function getAllProductByArray(){

        $cartProductsArr = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
        $productIds = implode($cartProductsArr, ',');
        $productArr = array();

        $query = mysql_query("SELECT * FROM `intshop_products` WHERE `id` IN ({$productIds})");
        while($row = mysql_fetch_assoc($query)) {    $productArr[] = $row;   }

      return $productArr;
    }

}