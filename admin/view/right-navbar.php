<?php

$employee = new CController();
$arEmployee = $employee->GetEmployee();
// pr($arEmployee);

 ?>
<!-- Right navbar -->
<ul class="list-inline navbar-right top-menu top-right-menu">
	<!-- User Menu Dropdown -->
	<li class="dropdown text-center">
		<a data-toggle="dropdown" class="dropdown-toggle" href="#"> <img alt="" src="../../view/assets/img/team/<?= $arEmployee[0]['img']; ?>" class="img-circle profile-img thumb-sm"> <span class="username"><?= $arEmployee[0]['name']; ?> </span> <span class="caret"></span> </a>
		<ul class="dropdown-menu extended pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
			<li>
				<a href="profile.html"><i class="fa fa-briefcase"></i>Профиль</a>
			</li>
			<li>
				<a href="#"><i class="fa fa-cog"></i> Настройки</a>
			</li>
			<li>
				<a href="/"><i class="fa fa-sign-out"></i> Выход</a>
			</li>
		</ul>
	</li>
	<!-- End User Menu Dropdown -->
</ul>
<!-- End Right Navbar -->