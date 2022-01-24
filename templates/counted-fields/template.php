<?php if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
global $mustache;
?>

<ul>
	<? foreach ($arResult['context']['items'] as $item): ?>
		<li><?= $item ?></li>
	<? endforeach; ?>
</ul>
