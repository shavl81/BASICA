<?php
$result = new CController();

if (isset($_POST['send'])){
    $dat = $_POST;
    $result->SetUserAdd($dat);
    echo '<meta http-equiv="refresh" content="0;URL=/admin/users/">';
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
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-body p-t-0">
                            	<div class="col-md-5">
	                                <div class="input-group">
	                                    <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
	                                    <span class="input-group-btn">
	                                        <button type="button" class="btn btn-effect-ripple btn-primary"><i class="fa fa-search"></i></button>
	                                    </span>
	                                </div>
                                </div>
                                 <div class="col-md-7">
                                 	<!-- Full width modal -->
                                <button class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target="#full-width-modal"><i class="fa  fa-plus"></i> Добавить</button>
                                <!-- Full width modal -->
                                 </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- End row -->

                <div class="row">
                	<?php foreach ($arResult as $item) { ?>
                    <div class="col-sm-6">
                        <div class="panel">
                            <div class="panel-body p-t-10">
                                <div class="media-main">
                                    <a class="pull-left" href="?id=<?= $item['id'] ?>">
                                        <img class="thumb-lg img-circle bx-s" src="../../view/assets/img/team/<?= $item['img'] ?>" alt="<?= $item['name'] ?>">
                                    </a>
                                    <div class="pull-right btn-group-sm">
                                        <a href="?id=<?= $item['id'] ?>" class="btn btn-success tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="?del=<?= $item['id'] ?>" class="btn btn-danger tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                            <i class="fa fa-close"></i>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <h4><?= $item['name'] ?></h4>
                                        <p class="text-muted"><?= $item['function'] ?></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <hr/>
                                <ul class="social-links list-inline p-b-10">
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="<?= $item['facebook'] ?>" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="<?= $item['twitter'] ?>" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="<?= $item['git'] ?>" data-original-title="Git"><i class="fa fa-github"></i></a>
                                    </li>
                                </ul>
                            </div> <!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- end col -->
                <? } ?>


                </div> <!-- End row -->

                <div class="row">
                    <div class="col-sm-12">
                        <ul class="pagination pull-right">
                            <li>
                              <a href="#" aria-label="Previous">
                                <i class="fa fa-angle-left"></i>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="disabled"><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <i class="fa fa-angle-right"></i>
                              </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- modal -->
                <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-full">
                        <div class="modal-content">
                            <form action="" method="POST">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                                    <h4 class="modal-title" id="full-width-modalLabel">Новый пользователь</h4>
                                </div>

                                <div class="modal-body">
                                    <div class="form-group">
                                        <h4>ФИО</h4>
                                        <input type="text" name="name" id="name" class="form-control">
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <h4>Должность</h4>
                                        <input type="text" name="function" id="function" class="form-control">
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <h4>Facebook</h4>
                                        <input type="text" name="facebook" id="facebook" class="form-control">
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <h4>Git</h4>
                                        <input type="text" name="git" id="git" class="form-control">
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <h4>Twitter</h4>
                                        <input type="text" name="twitter" id="twitter" class="form-control">
                                    </div>
                                    <hr>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                                    <button type="submit" name="send" class="btn btn-primary">Сохранить</button>
                                </div>
                            </form>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

            </div> <!-- END Wraper -->