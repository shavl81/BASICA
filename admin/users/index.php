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
	$arParams['user_id'] = $_GET['id'];
	$result = $page->SetPage('useredit', $arParams);
} elseif (isset($_GET['del'])) {
	$employee = R::load("employee", $_GET['del']);
	R::trash($employee);
	echo '<meta http-equiv="refresh" content="0;URL=/admin/users/">';
} else {
	// Выводим список новостей
	$result = $page->SetPage('users', $arParams);
}

// Подключаем footer
include ('../view/footer.php');
