<?php if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();


$arTemplateParameters = [
	'COMPONENT' => [
		'NAME' => 'Компонент',
		'TYPE' => 'string'
	],
	'list' => [
		'NAME' => 'Список полей, через запятую',
		'REFRESH' => "Y"
	]
];

if (!empty($arCurrentValues['list'])) {
	$list = explode(',', str_replace(', ', ',', $arCurrentValues['list']));
	if (count($list) > 0) {
		foreach($list as $key => $item) {
			$arTemplateParameters[$item] = [
				'NAME' => $item,
			];
		}
	}
}
