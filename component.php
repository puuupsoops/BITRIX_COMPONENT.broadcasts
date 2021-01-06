<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); 

$arResult["FILE"] = $arParams["FILE"]; 
$arResult["TITLE"] = $arParams["TITLE"]; 
$arResult["DESCRIPTION"] = $arParams["DESCRIPTION"]; 
$arResult["LINK"] = $arParams["LINK"];
$arResult["isOnline"] = $arParams["isOnline"]; 

$this -> includeComponentTemplate();

?>