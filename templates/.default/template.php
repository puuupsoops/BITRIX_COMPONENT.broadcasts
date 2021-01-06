<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<? 
$img_icon;
$flag_anonce;
$flag_online;

$img_on = 'rec.gif';
$img_off = 'rec_off.png';

$active_block = 'inline-block';
$hide_block ='none';

$dateTest = strtotime(mktime(15,41,00,8,2,2020));

$dateStart = strtotime(mktime(12,00,00,8,3,2020));
$dateCurrent = strtotime(date('m/d/Y h:i:s a', time()));

$dateResult = ($dateCurrent < $dateTest);

$isOnline = false;

if($arResult["isOnline"] == "Y")
{
    $img_icon = $img_on;
    $flag_anonce = $hide_block;
    $flag_online = $active_block;
}
else
{
    $img_icon = $img_off;
    $flag_anonce = $active_block;
    $flag_online = $hide_block;
}
?>

<div class="home-broadcasts">
    <div class="home-broadcasts__top">
        <div class="home-broadcasts__icon"><img src="<?=SITE_TEMPLATE_PATH?>/upload/<?=$img_icon?>" width="12px" height="12px" ></div>
        <div class="home-broadcasts__title">Прямая трансляция</div>
        <div id="home-broadcasts__flag-anonce" style="display:<?=$flag_anonce?>;">Анонс</div>
        <div id="home-broadcasts__flag-online" style="display:<?=$flag_online?>;">Эфир</div>
    </div>
    <div class="home-broadcasts__image" style="background-image: url(<?=$arResult["FILE"]?>)"></div>
    <div class="home-broadcasts__name"><?=$arResult["TITLE"]?></div>
    <div class="home-broadcasts__container">
    
    <section class="home-broadcasts__element">
        <div class="home-broadcasts__frame">
        <iframe width="560" height="315" src="<?=$arResult["LINK"]?>?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>

    <section class="home-broadcasts__element">
        <div class="home-broadcasts__text">
            <div class="home-broadcasts__description"><?=$arResult["DESCRIPTION"]?></div>
        </div>
    </section>
    
    </div>

</div>