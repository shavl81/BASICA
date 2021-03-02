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
					<!-- Blog Post -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post">
							<div class="single-post-title">
								<h2><?= $arResult['title']; ?> </h2>
							</div>

							<div class="single-post-image">
								<img src="../view/assets/img/news/<?= $arResult['img']; ?>" alt="<?= $arResult['img']; ?>">
							</div>
							<div class="single-post-info">
								<i class="glyphicon glyphicon-time"></i><?= date('d m Y', strtotime($arResult['date'])); ?>
								<!-- <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a> -->
							</div>
							<div class="single-post-content">
								<?= $arResult['text']; ?>
							</div>
						</div>
					</div>
					<!-- End Blog Post -->
					<!-- Sidebar -->
					<div class="col-sm-4 blog-sidebar">
						<!-- <h4>Search our Blog</h4>
						<form>
							<div class="input-group">
								<input class="form-control input-md" id="appendedInputButtons" type="text">
								<span class="input-group-btn">
									<button class="btn btn-md" type="button">Search</button>
								</span>
							</div>
						</form> -->
						<h4>Недавние Посты</h4>
						<?php include ('recent-post.php'); ?>
						<h4>Категории</h4>
						<?php include ('category-post.php'); ?>

						<!-- <h4>Archive</h4>
						<ul>
							<li><a href="#">January 2013</a></li>
							<li><a href="#">February 2013</a></li>
							<li><a href="#">March 2013</a></li>
							<li><a href="#">April 2013</a></li>
							<li><a href="#">May 2013</a></li>
						</ul> -->
					</div>
					<!-- End Sidebar -->
				</div>
			</div>
	    </div>