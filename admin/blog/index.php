<?php

require_once '../../core/cfg.php';

$page = new CController;
$arParams = array (
	'LIMIT' => 5,
	'ORDERBY' => 'id',
	'ORDER' => "DESC",
);

// Подключаем header
include ('../view/header.php');

// Выводим тело страницы
if (isset($_GET['id'])) {
	// Выводим отдельную новость
	$arParams['blog_id'] = $_GET['id'];
	$result = $page->SetPage('blogpost', $arParams);
} elseif (isset($_GET['del'])) {
	$blog = R::load("blog", $_GET['del']);
	R::trash($blog);
	echo '<meta http-equiv="refresh" content="0;URL=/admin/blog/">';
} else {
	// Выводим список новостей
	$result = $page->SetPage('blog', $arParams);
}

// Подключаем footer
include ('../view/footer.php');
