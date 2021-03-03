<!DOCTYPE html>
<html lang="ru">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<link rel="shortcut icon" href="../view/assets/img/icon.png">

		<title>Админка</title>

		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

		<!--Icon fonts css-->
		<link href="../view/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href="../view/assets/plugins/ionicon/css/ionicons.min.css" rel="stylesheet" />

		<!-- Bootstrap CSS -->
		<link href="../view/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="../view/assets/css/bootstrap-reset.css" rel="stylesheet">

		<!-- Modal Effect -->
		<link href="../view/assets/plugins/modal-effect/css/component.css" rel="stylesheet">

		<!--Animation css-->
		<link href="../view/assets/css/animate.css" rel="stylesheet">

		<!--bootstrap-wysihtml5-->
		<link rel="stylesheet" type="text/css" href="../view/assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
		<link href="../view/assets/plugins/summernote/summernote.css" rel="stylesheet" />

		<!--Morris Chart CSS -->
		<link rel="stylesheet" href="../view/assets/plugins/morris/morris.css">

		<!-- sweet alerts -->
		<link href="../view/assets/plugins/sweet-alert/sweet-alert.min.css" rel="stylesheet">

		<!-- Custom styles -->
		<link href="../view/assets/css/style.css" rel="stylesheet">
		<link href="../view/assets/css/helper.css" rel="stylesheet">
		<link href="../view/assets/css/style-responsive.css" rel="stylesheet" />

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>

		<!-- Header -->
		<header class="top-head container-fluid navbar-fixed-top">
			<!-- logo -->
			<div class="logo hidden-xs">
				<a href="?act=dashboard" class="logo-expanded"> <img src="../view/assets/img/icon.png" alt="logo"> <span class="nav-text">Админка</span> </a>
			</div>
			<!-- end logo -->
			<button type="button" class="navbar-toggle pull-left">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-toggle ion-navicon-round"></span>
			</button>

			<!-- Search -->
			<form role="search" class="navbar-left app-search pull-left hidden-xs">
				<input type="text" placeholder="Поиск..." class="form-control">
			</form>
			<!-- End Search -->

			<?php include ('right-navbar.php'); ?>
		</header>
		<!-- End Header -->

		<!-- Aside Menu -->
		<aside class="left-panel">

			<?php include ('leftmenu.php'); ?>



		</aside>
		<!-- End Aside -->