<?php
$result = new CController();

if (isset($_POST['save'])){
	$data = $_POST;

	$id = $data['id'];
	$img = $data['img'];
	$title = $data['title'];
	$text = $data['text'];
	$result->SetBlogEdit($id, $img, $title, $text);
	echo '<meta http-equiv="refresh" content="0;URL=/admin/blog/">';
}

?>
		<!--Main Content -->
		<section class="content">

			<!-- Page Content -->

			<div class="wraper container-fluid">
                <div class="page-title">
                    <h3 class="title"><i class="fa fa-file-text"></i> Блог</h3>
                </div>
				<div class="row">
					<div class="col-sm-12">
		                <div><?= $message; ?></div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title"><i class="ion-edit"></i> Редактирование</h3>
							</div>
							<div class="panel-body">
								<form class="form-horizontal" id="form" action="" method="POST" enctype="multipart/form-data">
									<div class="form-group">
											<label for="img" class="col-md-2 control-label">Фото</label>
											<div class="col-md-10">
												<input type="hidden" name="id" value="<?= $arResult['id']; ?>">
												<input type="text" id="img" name="img" value="<?= $arResult['img']; ?>"/>

											</div>
										</div>
										<div class="form-group">
											<label for="title" class="col-md-2 control-label">Название</label>
											<div class="col-md-10">
												<input id="title" name="title" type="text" class="form-control" value="<?= $arResult['title']; ?>">
											</div>
										</div>
										<div class="form-group">
											<label for="text" class="col-md-2 control-label">Текст</label>
											<div class="col-md-10">
												<textarea name="text" id="text" class="form-control" rows="10"><?= $arResult['text']; ?></textarea>
											</div>
										</div>
										<div class="form-group">
	                                        <div class="col-lg-offset-2 col-lg-10">
	                                            <input name="save" class="btn btn-success" type="submit" value="Сохранить">
	                                            <!-- <button class="btn btn-default" type="button">Cancel</button> -->
	                                        </div>
	                                    </div>

								</form>
							</div>
							<!-- panel-body -->
						</div>
						<!-- panel -->
					</div>
					<!-- col -->
				</div>
				<!-- End row -->



            </div>
            <!-- Page Content Ends -->
