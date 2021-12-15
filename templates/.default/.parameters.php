<?php if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();

$fields = array(
	'test' => 'Тестовое поле',
);

foreach ($fields as $key => $field) {
	$arTemplateParameters[$k] = array(
		'NAME' => $field,
		'COLS' => 35,
		'ROWS' => 3
	);
}
