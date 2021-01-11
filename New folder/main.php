<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
CModule::IncludeModule("iblock");
require_once "Action.php";

$action = new Action();
$method = $_GET['action'];
$action->limit = (int)$_GET['limit'];
$action->blockId = (int)$_GET['iblockId'];
$action->itemId = (int)$_GET['itemId'];

if (!isset($_GET['iblockId']))
{
    echo "сообщение об отсутствии одного из параметров или пустоте его значения.";
}

if (method_exists($action, $method))
{
    $action->$method();
}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");

//http://intern-two.6hi.ru/ajax/iblockHandler.php?action=GetItems&iblockId=1&limit=3
?>
