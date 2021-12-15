<?php if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();

$set = array(
	'test' => 'Тестовое поле',
);

$arTemplateParameters = [
	'COMPONENT' => [
		'NAME' => 'Компонент',
		'TYPE' => 'string'
	]
];

foreach ($set as $k => $val) {
	$arTemplateParameters[$k] = array(
		'NAME' => $val,
		'COLS' => 35,
		'ROWS' => 3
	);
}
