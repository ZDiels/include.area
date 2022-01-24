<?php if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();

if (!empty($arParams['fields-count']) && $arParams['fields-count'] > 0) {
	for ($i = 0; $i < $arParams['fields-count']; $i++) {
		$arResult['context']['items'][] = $arParams['field_'.$i];
	}
}