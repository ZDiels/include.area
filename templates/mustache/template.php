<?php if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
global $mustache;

$context = [
	'items' => []
];

if (!empty($arParams['list'])) {
	$list = explode(',', str_replace(', ', ',', $arParams['list']));
	if (count($list) > 0) {
		foreach($list as $key => $item) {
			$context[$key][] = $item;
		}
	}
}
?>

<? if (!empty($arParams['COMPONENT'])) echo $mustache->render($arParams['COMPONENT'], $arParams); ?>