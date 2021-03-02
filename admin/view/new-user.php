<?php

$options = new CController();
$allOptions = $options->GetAllOptions();
$users = new CController();
$allUsers = $users->GetEmployee();

if (isset($_POST['save'])){
	foreach ($allUsers as $user) {
			$new_value = $_POST[$user['name']];
			if($user['value'] != $new_value) {
				$options->SetOptions($user['name'], $new_value);
			}
		}

		$message = '<div class="alert alert-success" role="alert">Данные успешно сохранены!</div>';
}

?>
		<!--Main Content -->
		<section class="content">

			<!-- Page Content -->

			<div class="wraper container-fluid">
                <div class="page-title">
                    <h3 class="title"><i class="ion-android-add-contact"></i> Новый пользователь</h3>
                </div>
				<div class="row">
					<div class="col-sm-12">
		                <div><?= $message; ?></div>
						<div class="panel panel-default">
							<div class="panel-body">
								<form class="form-horizontal" id="form" action="" method="POST">

									<?php $allOptions = $options->GetAllOptions(); foreach ($allOptions as $option) { ?>

										<div class="form-group">
											<label for="<?= $option['name']; ?>" class="col-md-2 control-label"><?= $option['name']; ?></label>
											<div class="col-md-10">
												<input id="<?= $option['name']; ?>" name="<?= $option['name']; ?>" type="text" class="form-control" value="<?= $option['value']; ?>">
											</div>
										</div>
									 <? } ?>
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
