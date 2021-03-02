<?php

require_once '../core/cfg.php';

$page = new CController;
$arParams = array ();

// Подключаем header
include ('../view/header.php');

// Выводим тело страницы
$result = $page->SetPage('about', $arParams);
// pr ($result);

// Подключаем footer
include ('../view/footer.php');
