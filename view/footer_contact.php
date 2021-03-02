<?php

$contact = new CController();
$arContact = $contact->GetContact();
$linkPhone = preg_replace("/[^0-9]/", '', $arContact[6]['value']);
// pr($arContact);
 ?>

<div class="col-footer col-md-4 col-xs-6">
	<h3><?= $arContact[2]['value']; ?></h3>
	<p class="contact-us-details">
		<?= $arContact[3]['value']; ?><br />
		<b>Адрес:</b> <?= $arContact[4]['value']; ?><br/>
		<b>Телефон:</b><a href="tel:+<?= $linkPhone; ?>"><?= $arContact[6]['value']; ?></a> <br/>
		<b>Email:</b> <a href="mailto:<?= $arContact[5]['value']; ?>"><?= $arContact[5]['value']; ?></a>
	</p>
</div>