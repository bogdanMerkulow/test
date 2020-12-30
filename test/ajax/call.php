<?php 
require_once "../CProducts.php";
$id = $_POST['data'];
CProducts::HideProduct($id, 0);
?>