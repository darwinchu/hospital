<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		
		<title>{{ config('app.name', 'Laravel') }}</title>

		<link rel="stylesheet" href="/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
		<link rel="stylesheet" href="/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
		<link rel="stylesheet" href="/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
		<link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
		<link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.addons.css">
		<link rel="stylesheet" href="/assets/css/shared/style.css">
		<link rel="stylesheet" href="/assets/css/demo_1/style.css">

		<!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
		
		<link rel="shortcut icon" href="/assets/images/favicon.ico" />
	</head>
	<body>
		<div class="container-scroller">
			<!-- partial:partials/_navbar.html -->
			<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
				<div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
					<a class="navbar-brand brand-logo" href="index.html">
						<img src="assets/images/logo.svg" alt="logo" /> </a>
					<a class="navbar-brand brand-logo-mini" href="index.html">
						<img src="assets/images/logo-mini.svg" alt="logo" /> </a>
				</div>
				<div class="navbar-menu-wrapper d-flex align-items-center">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
							<a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
								<img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="Profile image"> </a>
							<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
								<div class="dropdown-header text-center">
									<img class="img-md rounded-circle" src="assets/images/faces/face8.jpg" alt="Profile image">
									<p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
									<p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
								</div>
								<a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
								<a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
								<a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
								<a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
								<a class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
							</div>
						</li>
					</ul>
					<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
						<span class="mdi mdi-menu"></span>
					</button>
				</div>
			</nav>
			<!-- partial -->
			<div class="container-fluid page-body-wrapper">
				<!-- partial:partials/_sidebar.html -->
				<nav class="sidebar sidebar-offcanvas" id="sidebar">
					<ul class="nav">

						<li class="nav-item nav-profile">
							<a href="#" class="nav-link">
								<div class="profile-image">
									<img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="profile image">
									<div class="dot-indicator bg-success"></div>
								</div>
								<div class="text-wrapper">
									<p class="profile-name">Allen Moreno</p>
									<p class="designation">Premium user</p>
								</div>
							</a>
						</li>


						<li class="nav-item nav-category">Main Menu</li>
						<li class="nav-item">
							<a class="nav-link" href="index.html">
								<i class="menu-icon typcn typcn-document-text"></i>
								<span class="menu-title">Patients</span>
							</a>
						</li>
					</ul>
				</nav>
				<!-- partial -->
				<div class="main-panel">
					<div class="content-wrapper">
						
					</div>
					<!-- content-wrapper ends -->
					<!-- partial:partials/_footer.html -->
					<footer class="footer">
						<div class="container-fluid clearfix">
							<span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
							<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
						</div>
					</footer>
					<!-- partial -->
				</div>
				<!-- main-panel ends -->
			</div>
			<!-- page-body-wrapper ends -->
		</div>
	</body>
</html>

