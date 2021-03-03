<?php
$result = new CController();
$employee = $result->GetCountEmployee();
$users = $result->GetEmployee();
$countPost = $result->GetCountPost();
$posts = $result->GetRecentPost();
$countNews = $result->GetCountNews();
$news = $result->GetRecentNews();
?>
		<!--Main Content -->
		<section class="content">
			<!-- Page Content -->

			<div class="wraper container-fluid">
				<div class="page-title">
					<h3 class="title"><i class="fa fa-dashboard"></i> Дашборд</h3>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-sm-4">
								<div class="tile-stats white-bg">
									<div class="status">
										<h3 class="m-t-0 text-info">
											<i class="fa fa-users"></i> <?= $employee; ?></h3>
										<p>
											Всего пользователей
										</p>
									</div>
									<div class="chart-inline">
										<span id="dashboard1"></span>
									</div>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="tile-stats white-bg">
									<div class="status">
										<h3 class="m-t-0 text-danger">
											<i class="fa fa-newspaper-o"></i> <?= $countNews; ?></h3>
										<p>
											Новостей
										</p>
									</div>
									<span id="dashboard2"></span>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="tile-stats white-bg">
									<div class="col-sm-8">
										<div class="status">
											<h3 class="m-t-15 text-success">
												<i class="fa fa-file-text"></i> <?= $countPost; ?></h3>
											<p>
												Записей в блоге
											</p>
										</div>
									</div>
									<div class="col-sm-4 m-t-20">
										<span id="dashboard3"></span>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>

				<div class="row">
					<div class="col-lg-4">

						<!-- Todo -->
						<div class="portlet" id="todo-container">
							<div class="portlet-heading">
								<h3 class="portlet-title text-dark text-uppercase"> Todo </h3>
								<div class="portlet-widgets">
									<a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
									<span class="divider"></span>
									<a data-toggle="collapse" data-parent="#accordion1" href="#portlet-5" class="" aria-expanded="true"><i class="ion-minus-round"></i></a>
									<span class="divider"></span>
									<a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div id="portlet-5" class="panel-collapse collapse in">
								<div class="portlet-body todoapp">
									<div class="row">
										<div class="col-sm-6">
											<h4 id="todo-message"><span id="todo-remaining">2</span> of <span id="todo-total">6</span> remaining</h4>
										</div>
										<div class="col-sm-6">
											<a href="" class="pull-right btn btn-primary btn-sm" id="btn-archive">Archive</a>
										</div>
									</div>

									<ul tabindex="5001" class="list-group no-margn nicescroll todo-list" style="max-height: 275px; overflow: hidden;" id="todo-list">
										<li class="list-group-item">
											<label class="cr-styled">
												<input checked="" class="todo-done" id="6" type="checkbox">
												<i class="fa"></i></label><span class="todo-text">Build an angular app</span>
										</li>
										<li class="list-group-item">
											<label class="cr-styled">
												<input class="todo-done" id="5" type="checkbox">
												<i class="fa"></i></label><span class="todo-text">Hehe!! This is looks cool!</span>
										</li>
										<li class="list-group-item">
											<label class="cr-styled">
												<input checked="" class="todo-done" id="4" type="checkbox">
												<i class="fa"></i></label><span class="todo-text">Testing??</span>
										</li>
										<li class="list-group-item">
											<label class="cr-styled">
												<input checked="" class="todo-done" id="3" type="checkbox">
												<i class="fa"></i></label><span class="todo-text">Creating component page</span>
										</li>
										<li class="list-group-item">
											<label class="cr-styled">
												<input checked="" class="todo-done" id="2" type="checkbox">
												<i class="fa"></i></label><span class="todo-text">Build a js based app</span>
										</li>
										<li class="list-group-item">
											<label class="cr-styled">
												<input class="todo-done" id="1" type="checkbox">
												<i class="fa"></i></label><span class="todo-text">Design One page theme</span>
										</li>
									</ul>

									<form name="todo-form" id="todo-form" role="form" class="m-t-20">
										<div class="row">
											<div class="col-sm-9 todo-inputbar">
												<input id="todo-input-text" name="todo-input-text" class="form-control" placeholder="Add new todo" type="text">
											</div>
											<div class="col-sm-3 todo-send">
												<button class="btn-info btn-block btn" type="button" id="todo-btn-submit">
													Add
												</button>
											</div>
										</div>
									</form>

								</div>
							</div>
						</div>
					</div>
					<!-- End Todo -->
					<div class="col-lg-8">
						<!-- Team -->
						<div class="portlet">
							<div class="portlet-heading">
								<h3 class="portlet-title text-dark text-uppercase"> Члены команды </h3>
								<div class="portlet-widgets">
									<a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
									<span class="divider"></span>
									<a data-toggle="collapse" data-parent="#accordion1" href="#portlet-6" class="" aria-expanded="true"><i class="ion-minus-round"></i></a>
									<span class="divider"></span>
									<a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div id="portlet-6" class="panel-collapse collapse in">
								<div class="portlet-body">
									<ul class="list-group list-group-lg">
										<?php foreach($users as $item) { ?>
										<li class="list-group-item b-0">
											<a href="#" class=" m-r-10"> <img src="../../view/assets/img/team/<?= $item['img'] ?>" class="thumb-sm br-radius"> </a>
											<span class="pull-right label bg-primary inline m-t-10"><?= $item['function'] ?></span>
											<a href="#"><?= $item['name'] ?></a>
										</li>
									<?php } ?>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Team -->
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="portlet">
							<div class="portlet-heading">
								<h3 class="portlet-title text-dark text-uppercase"> Новости </h3>
								<div class="portlet-widgets">
									<a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
									<span class="divider"></span>
									<a data-toggle="collapse" data-parent="#accordion1" href="#portlet4"><i class="ion-minus-round"></i></a>
									<span class="divider"></span>
									<a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div id="portlet4" class="panel-collapse collapse in">
								<div class="portlet-body">
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th>Дата</th>
													<th>Заголовок</th>
													<th>Автор</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach($news as $item) {
													$array = explode(" ", $item['title']); //перерабатываем строку в массив
													$array = array_slice($array, 0, 5); //выбираем первые 10 слов
													$newText = implode(" ", $array); //перерабатываем массив обратно в строку
												?>
												<tr>
													<td><?= $item['date'] ?></td>
													<td><?= $newText.'...' ?></td>
													<td><span class="label label-pink"><?= $item['author'] ?></span></td>
												</tr>
											<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="portlet">
							<div class="portlet-heading">
								<h3 class="portlet-title text-dark text-uppercase"> Блог </h3>
								<div class="portlet-widgets">
									<a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
									<span class="divider"></span>
									<a data-toggle="collapse" data-parent="#accordion1" href="#portlet3"><i class="ion-minus-round"></i></a>
									<span class="divider"></span>
									<a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div id="portlet3" class="panel-collapse collapse in">
								<div class="portlet-body">
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th>Дата</th>
													<th>Заголовок</th>
													<th>Автор</th>
												</tr>
											</thead>
											<tbody>
												<?php foreach($posts as $item) {
													$array = explode(" ", $item['title']); //перерабатываем строку в массив
													$array = array_slice($array, 0, 5); //выбираем первые 10 слов
													$newText = implode(" ", $array); //перерабатываем массив обратно в строку
												?>
												<tr>
													<td><?= $item['date'] ?></td>
													<td><?= $newText.'...' ?></td>
													<td><span class="label label-purple"><?= $item['author'] ?></span></td>
												</tr>
											<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Content -->