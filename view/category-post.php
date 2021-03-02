<?php

$categoryPost = new CController();
$arCategoryPost = $categoryPost->GetCategoryPost();
// pr($arCategoryPost);

 ?>
<ul class="blog-categories">
	<?php foreach ($arCategoryPost as $item) { ?>
	<li><a href="/category/id=<?= $item['id']; ?>"><?= $item['name']; ?></a></li>
	<? } ?>
</ul>