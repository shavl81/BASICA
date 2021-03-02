<?php

$social = new CController();
$arSocial = $social->GetContact();
// pr($arSocial);

 ?>

<div class="col-footer col-md-4 col-xs-6">
	<h3><?= $arSocial[7]['value']; ?></h3>
	<p><?= $arSocial[8]['value']; ?></p>
	<div>
		<a href="<?= $arSocial[9]['value']; ?>" target="blank_" ><img src="../view/assets/img/icons/facebook.png" width="32" alt="Facebook"></a>
		<a href="<?= $arSocial[10]['value']; ?>" target="blank_" ><img src="../view/assets/img/icons/twitter.png" width="32" alt="Twitter"></a>
		<a href="<?= $arSocial[11]['value']; ?>" target="blank_" ><img src="../view/assets/img/icons/linkedin.png" width="32" alt="LinkedIn"></a>
		<a href="<?= $arSocial[12]['value']; ?>" target="blank_" ><img src="../view/assets/img/icons/rss.png" width="32" alt="RSS Feed"></a>
	</div>
</div>