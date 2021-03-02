        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1><?= $arResult['title']; ?></h1>
					</div>
				</div>
			</div>
		</div>
        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-4">
					<img class="img-responsive" src="../view/assets/img/<?= $arResult['img']; ?>" alt="<?= $arResult['img']; ?>">
					</div>
					<div class="col-sm-8"><?= $arResult['description']; ?>
						<div class="clients-logo-wrapper text-center row">
							<div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="../view/assets/img/logos/logo-1.jpg" alt="Client Name"></a></div>
							<div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="../view/assets/img/logos/logo-2.jpg" alt="Client Name"></a></div>
							<div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="../view/assets/img/logos/logo-3.jpg" alt="Client Name"></a></div>
							<div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="../view/assets/img/logos/logo-4.jpg" alt="Client Name"></a></div>
							<div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="../view/assets/img/logos/logo-5.jpg" alt="Client Name"></a></div>
							<div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="../view/assets/img/logos/logo-6.jpg" alt="Client Name"></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>

<hr>
        <div class="section">
	    	<div class="container">
				<div class="row">
					<!-- Team Member -->
					<?php include ('team-member.php'); ?>
					<!-- End Team Member -->
				</div>
			</div>
		</div>