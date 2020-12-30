<?php
require_once "DataBase.php";
class CProducts
{
    public static function GetProducts(int $limit = 10)
    {
        $db = new DataBase();
        $products = $db->Query($limit);
        return $products;
    }
    public static function HideProduct(int $id, int $status)
    {
        $db = new DataBase();
        $db->UpdateStatus($id, $status);
    }
}
?>