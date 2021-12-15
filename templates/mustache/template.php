<?php if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
global $mustache;
?>

<? if (!empty($arParams['COMPONENT'])) echo $mustache->render($arParams['COMPONENT'], $arParams); ?>