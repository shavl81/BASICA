<?php

$social = new CController();
$arSocial = $social->GetContact();
// pr($arSocial);

 ?>

<div class="col-footer col-md-4 col-xs-6">
	<h3><?= $arSocial[0]['value']; ?></h3>
		<p><?= $arSocial[1]['value']; ?></p>
</div>