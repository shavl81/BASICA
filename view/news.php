        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Новости</h1>
					</div>
				</div>
			</div>
		</div>

        <div class="section">
	    	<div class="container">
				<div class="row">
					<!-- Blog Post Excerpt -->
					<?php foreach ($arResult as $item) {
						// Сокращаем текст до определенного количества слов
						$array = explode(" ", $item['text']); //перерабатываем строку в массив
						$array = array_slice($array, 0, 50); //выбираем первые 15 слов
						$newText = implode(" ", $array); //перерабатываем массив обратно в строку

						// Форматируем дату
						$newDate = date("d m Y", strtotime($item['date']));

						?>

					<div class="col-sm-6">
						<div class="blog-post blog-single-post">
							<div class="single-post-title">
								<h2><?= $item['title']; ?></h2>
							</div>

							<div class="single-post-image">
								<img src="../view/assets/img/news/<?= $item['img']; ?>" alt="Post Title">
							</div>

							<div class="single-post-info">
								<i class="glyphicon glyphicon-calendar"></i><?= $newDate; ?>
								<!-- <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a> -->
							</div>

							<div class="single-post-content">
								<p><?= $newText.'...'; ?>
								</p>
							<a href="?id=<?= $item['id']; ?>" class="btn">Читать</a>
							</div>
						</div>
					</div>
				<?php } ?>
					<!-- End Blog Post Excerpt -->

								<!-- Pagination -->
								<div class="pagination-wrapper ">
									<ul class="pagination pagination-sm">
										<li class="disabled"><a href="#">Previous</a></li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#">Next</a></li>
									</ul>
								</div>

				</div>
			</div>
	    </div>
