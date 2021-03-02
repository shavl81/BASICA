<?php

$adminMenu = new CController;
$arAdminMenu = $adminMenu->GetAdminMenu();
// pr($arAdminMenu);

?>
<!-- Navbar -->
			<nav class="navigation">
				<ul class="list-unstyled">
				<?php foreach ($arAdminMenu as $adminMenu) { ?>

					<li>
						<a href="<?= $adminMenu['link']; ?>"><i class="<?= $adminMenu['icon']; ?>"></i> <span class="nav-label"><?= $adminMenu['name']; ?></span></a>
					</li>


					<!-- <li class="has-submenu">
						<a href="#"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Новости</span> <span class="caret pull-right m-t-10"></span></a>
						<ul class="list-unstyled">
							<li>
								<a href="#">Все новости</a>
							</li>
							<li>
								<a href="#">Добавить новость</a>
							</li>
						</ul>
					</li>

					<li class="has-submenu">
						<a href="#"><i class="ion-android-note"></i> <span class="nav-label">Блог</span> <span class="caret pull-right m-t-10"></span></a>
						<ul class="list-unstyled">
							<li>
								<a href="#">Все статьи</a>
							</li>
							<li>
								<a href="#">Добавить статью</a>
							</li>
						</ul>
					</li> -->
				<?php } ?>
				</ul>
			</nav>
			<!-- End Navbar -->