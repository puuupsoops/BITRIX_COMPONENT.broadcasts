<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); 

$arComponentParameters = array(
    "FILE" => array(
        "PARENT" => "BASE",
        "NAME" => "Изображение превью",
        "TYPE" => "FILE",
        "FD_EXT" => "png,gif,jpg,jpeg",
        "FD_UPLOAD" => true,
        "FD_USE_MEDIALIB" => true,
        "FD_MEDIALIB_TYPES" => Array(
            'image',
        ),
        "DEFAULT" => ""

    ),
    "TITLE" => array(
        "PARENT" => "BASE",
        "NAME" => "Название мероприятия",
        "TYPE" => "STRING",
        "MULTYPLE" => "N",
        "ADDITIONAL_VALUES" => "Y",
        "DEFAULT" => null,
    ),
    "DESCRIPTION" => array(
        "PARENT" => "BASE",
        "NAME" => "Описание анонса мероприятия",
        "TYPE" => "STRING",
        "MULTYPLE" => "Y",
        "ADDITIONAL_VALUES" => "Y",
        "DEFAULT" => null,
    ),
    "LINK" => array(
        "PARENT" => "BASE",
        "NAME" => "Ссылка на трансляцию",
        "TYPE" => "STRING",
        "MULTYPLE" => "N",
        "ADDITIONAL_VALUES" => "Y",
        "DEFAULT" => null,
    ),
    "isOnline" => array(
        "PARENT" => "BASE",
        "NAME" => "В эфире?",
        "TYPE" => "CHECKBOX",
    )
);

?>