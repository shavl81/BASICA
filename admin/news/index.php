<?php

require_once '../../core/cfg.php';

$page = new CController;
$arParams = array (
	'LIMIT' => 6,
	'ORDERBY' => 'id',
	'ORDER' => "DESC",
);

// Подключаем header
include ('../view/header.php');

// Выводим тело страницы
if (isset($_GET['id'])) {
	// Выводим отдельную новость
	$arParams['news_id'] = $_GET['id'];
	$result = $page->SetPage('newspost', $arParams);
} elseif (isset($_GET['del'])) {
	$news = R::load("news", $_GET['del']);
	R::trash($news);
	echo '<meta http-equiv="refresh" content="0;URL=/admin/news/">';
} else {
	// Выводим список новостей
	$result = $page->SetPage('news', $arParams);
}

// Подключаем footer
include ('../view/footer.php');
