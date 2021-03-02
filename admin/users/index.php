<?php

require_once '../../core/cfg.php';

$page = new CController;
$arParams = array (
	'LIMIT' => 3,
	'ORDERBY' => 'id',
	'ORDER' => "ASC",
);

// Подключаем header
include ('../view/header.php');

// Выводим тело страницы
if (isset($_GET['id'])) {
	// Выводим отдельную новость
	$arParams['user_id'] = $_GET['id'];
	$result = $page->SetPage('useredit', $arParams);
} else {
	// Выводим список новостей
	$result = $page->SetPage('users', $arParams);
}

// Подключаем footer
include ('../view/footer.php');
