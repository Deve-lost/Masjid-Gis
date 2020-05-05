<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
	<title><?= $title ?></title>
	<meta content="Admin Dashboard" name="description">
	<meta content="Jquin" name="author">
	<link rel="shortcut icon" href="<?= base_url() ?>assets/icon/logo.png">
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/morris/morris.css">
	<link href="<?= base_url() ?>assets/horizontal/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/horizontal/assets/css/icons.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/horizontal/assets/css/style.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url() ?>assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">

	<!-- Maps -->
	<?= $maps['js'] ?>
	<!-- DataTables -->
	<link href="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"><link href="<?= base_url() ?>assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
	<!-- Responsive datatable examples -->
	<link href="<?= base_url() ?>assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
</head>
	<body>
		<!-- Navigation Bar-->
		<header id="topnav">
			<div class="topbar-main">
				<div class="container-fluid">
					<!-- Logo container-->
					<div class="logo">
						<a href="<?= base_url() ?>" class="logo">
							<img src="<?= base_url() ?>assets/icon/logo.png" alt="logo" class="logo-small">
							<!-- <img src="" alt="" width="100" height="50" class="logo-large"> -->
							</a>
						</div>
						<!-- End Logo container-->
						<div class="menu-extras topbar-custom">
							<ul class="float-right list-unstyled mb-0">
								<li class="dropdown notification-list">
									</li>
									<li class="menu-item">
										<!-- Mobile menu toggle--> 
										<a class="navbar-toggle nav-link" id="mobileToggle">
											<div class="lines">
												<span></span> 
												<span></span> 
												<span></span>
											</div>
										</a>
										<!-- End mobile menu toggle-->
									</li>
								</ul>
							</div><!-- end menu-extras -->
							<div class="clearfix"></div>
						</div>
						<!-- end container -->
					</div>
					<!-- end topbar-main -->
					<div class="container-fluid">
						<!-- Page-Title -->
						<div class="row">
							<div class="col-sm-12">
								<div class="page-title-box"><h4 class="page-title"><?= $title ?></h4>
									<ol class="breadcrumb">
										<li class="breadcrumb-item active">Selamat Datang Di Website - Masjid Terdekat</li>
									</ol>
									<div class="state-information">
										<div class="state-graph">
											<img src="<?= base_url() ?>assets/icon/logo.png" alt="logo" style="width: 100px; height: 50px;">
											<div class="info">Total Masjid Yang Terdaftar : <?= $total ?></div>
										</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- MENU Start -->
						<div class="navbar-custom">
							<div class="container-fluid">
								<div id="navigation">
									<!-- Navigation Menu-->
									<ul class="navigation-menu">
										<li class="has-submenu">
											<a href="<?= base_url() ?>">
												<i class="ti-map"></i> 
												<span>Pementaan</span>
											</a>
										</li>
										<li class="has-submenu">
											<a href="<?= base_url('masjid') ?>">
												<i class="ti-view-grid"></i> 
												<span>Data Masjid</span>
											</a>
										</li>
										<li class="has-submenu">
											<a href="<?= base_url('beranda/tentang') ?>">
												<i class="ti-comment-alt"></i> 
												<span>Masjid Terdekat</span>
											</a>
										</li>
									</ul><!-- End navigation menu -->
								</div><!-- end navigation -->
							</div>
							<!-- end container-fluid -->
						</div>
						<!-- end navbar-custom -->
					</header>
					<!-- End Navigation Bar-->
					<div class="wrapper">
						<div class="container-fluid">