<?php

require_once '../../core/cfg.php';

$page = new CController;
$arParams = array ();
// pr($_SERVER);
include ('../view/header.php');
// pr($arParams);
$page->SetPage('dashboard', $arParams);

include ('../view/footer.php');

?>