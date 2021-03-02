<?php

require_once '../core/cfg.php';

$page = new CController;
$arParams = array (
	'LIMIT' => 6,
	'ORDERBY' => 'date',
	'ORDER' => "DESC",
);

// Подключаем header
include ('../view/header.php');

// Выводим тело страницы
if (isset($_GET['id'])) {
	// Выводим отдельную новость
	$arParams['blog_id'] = $_GET['id'];
	$result = $page->SetPage('blogpost', $arParams);
} else {
	// Выводим список новостей
	$result = $page->SetPage('blog', $arParams);
}

// Подключаем footer
include ('../view/footer.php');
