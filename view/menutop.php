<?php

$menu = new CController;
$arMenu = $menu->GetMenu();

?>
<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
        <? foreach ($arMenu as $item) { ?>
            <li><a href="<?= $item['link']; ?>"><?= $item['name']; ?></a></li>
        <? } ?>

    </ul>
</div>