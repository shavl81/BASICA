<?php

$members = new CController();
$arMembers = $members->GetEmployee();
// pr($arMembers);

 ?>

<?php foreach($arMembers as $member) { ?>
<div class="col-md-4 col-sm-6">
	<div class="team-member">
		<!-- Team Member Photo -->
		<div class="team-member-image"><img src="../view/assets/img/team/<?= $member['img']; ?>" alt="<?= $member['name']; ?>"></div>
		<div class="team-member-info">
			<ul>
				<!-- Team Member Info & Social Links -->
				<li class="team-member-name">
					<?= $member['name']; ?>
					<!-- Team Member Social Links -->
					<span class="team-member-social">
						<a href="<?= $member['facebook']; ?>"><i class="icon-facebook"></i></a>
						<a href="<?= $member['git']; ?>"><i class="icon-github"></i></a>
						<a href="<?= $member['twitter']; ?>"><i class="icon-tumblr"></i></a>
					</span>
				</li>
				<li><?= $member['function']; ?></li>
			</ul>
		</div>
	</div>
</div>
<? } ?>