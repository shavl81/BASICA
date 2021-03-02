<?php

require_once 'core/cfg.php';

$page = new CController;
$arParams = array (
	'LIMIT' => 3,
	'ORDER' => 'ASC',
);
include ('view/header.php');

$page->SetPage('main', $arParams);

include ('view/footer.php');

?>