<?php

$recentPost = new CController();
$arRecentPost = $recentPost->GetRecentPost();
// pr($arRecentPost);

 ?>

<ul class="recent-posts">
	<?php foreach ($arRecentPost as $item) { ?>
	<li><a href="?id=<?= $item['id']; ?>"><?= $item['title']; ?></a></li>
	<?php } ?>
</ul>

