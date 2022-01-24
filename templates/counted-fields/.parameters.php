<?php if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();


$arTemplateParameters = [
	'fields-count' => [
		'NAME' => 'Количество полей',
		'REFRESH' => "Y"
	]
];

if (!empty($arCurrentValues['fields-count'])) {
	if ($arCurrentValues['fields-count'] > 0) {
		for ($i = 0; $i < $arCurrentValues['fields-count']; $i++) {
			$arTemplateParameters['field_'.$i] = [
				'NAME' => 'Поле #'.$i,
			];
		}
	}
}
