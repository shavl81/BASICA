<?php
$result = new CController();

if (isset($_POST['save'])){
	$data = $_POST;
	$uploaddir = '../../view/assets/img/team/';
	$uploadfile = $uploaddir . basename($_FILES['name']);
	move_uploaded_file($uploadfile);
	// $name = $_FILES['filename']['name'];
 //    move_uploaded_file($_FILES['filename']['tmp_name'], $name);


	$id = $data['id'];
	$img = $data['img'];
	$name = $data['name'];
	$function = $data['function'];
	$facebook = $data['facebook'];
	$git = $data['git'];
	$twitter = $data['twitter'];
	$result->SetUserEdit($id, $img, $name, $function, $facebook, $git, $twitter);
	$message = '<div class="alert alert-success" role="alert">Данные успешно сохранены!</div>';
}

?>
		<!--Main Content -->
		<section class="content">

			<!-- Page Content -->

			<div class="wraper container-fluid">
                <div class="page-title">
                    <h3 class="title"><i class="fa fa-users"></i> Пользователи</h3>
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
												<input type="file" id="img" name="img" value="<?= basename($_FILES['name']); ?>"/>

											</div>
										</div>
										<div class="form-group">
											<label for="name" class="col-md-2 control-label">Имя</label>
											<div class="col-md-10">
												<input id="name" name="name" type="text" class="form-control" value="<?= $arResult['name']; ?>">
											</div>
										</div>
										<div class="form-group">
											<label for="function" class="col-md-2 control-label">Должность</label>
											<div class="col-md-10">
												<input id="function" name="function" type="text" class="form-control" value="<?= $arResult['function']; ?>">
											</div>
										</div>
										<div class="form-group">
											<label for="facebook" class="col-md-2 control-label">Facebook</label>
											<div class="col-md-10">
												<input id="facebook" name="facebook" type="text" class="form-control" value="<?= $arResult['facebook']; ?>">
											</div>
										</div>
										<div class="form-group">
											<label for="git" class="col-md-2 control-label">Git</label>
											<div class="col-md-10">
												<input id="git" name="git" type="text" class="form-control" value="<?= $arResult['git']; ?>">
											</div>
										</div>
										<div class="form-group">
											<label for="twitter" class="col-md-2 control-label">Twitter</label>
											<div class="col-md-10">
												<input id="twitter" name="twitter" type="text" class="form-control" value="<?= $arResult['twitter']; ?>">
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
