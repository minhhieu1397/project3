<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://kit.fontawesome.com/e91d502acc.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>	
	<header class="navbar navbar-expand-lg navbar-light bg-light">
		<!-- <img src="image/images.jpg" height="70px" width="110px" class="imgheader"> -->
		<i class='fab fa-adn' style='font-size:36px'></i> Ammple
		<div class="collapse navbar-collapse content-header" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto ">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Create</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Setting
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Link 1</a>
						<a class="dropdown-item" href="#">Link 2</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Link 3</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				</li>
			</ul>

			<ul class="form-inline my-2 my-lg-0 navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#">
						<i class="material-icons">notifications_active</i>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">
						<i class="material-icons">email</i>
					</a>
				</li>
				<li class="nav-item dropdown sigout">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Sigout
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Link 1</a>
						<a class="dropdown-item" href="#">Link 2</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Link 3</a>
					</div>
				</li>
			</ul>
		</div>
	</header>

	<div class="container-fluid content">
		<div class="row">
			<div class="col-md-2 welcome">
				<nav class="navbar bg-dark navbar-dark conten-left">
					<ul class="navbar-nav nav">
						<li class="nav-item">
							<a class="nav-link a-iteam" href="#">
								<i class="fa fa-home"></i> Home
							</a>
						</li>
						<li class="nav-title default-iteam">THEME</li>
						<li class="nav-item">
							<a class="nav-link a-iteam" href="#">
								<i class="material-icons" style='font-size:23px'>bubble_chart</i> Colors
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link a-iteam" href="#">
								<i class="material-icons" style='font-size:23px'>create</i>Typography
							</a>
						</li>
						<li class="nav-item default-iteam">COMPONENTS</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle a-iteam" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="material-icons" style='font-size:23px'>book</i>Base
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item dropdown-base" href="#">Link 1</a>
								<a class="dropdown-item dropdown-base" href="#">Link 2</a>
								<div class="dropdown-divider dropdown-base"></div>
								<a class="dropdown-item dropdown-base" href="#">Link 3</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle a-iteam" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="small material-icons" style='font-size:23px'>center_focus_weak</i> Buttons
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item dropdown-base" href="#">Link 1</a>
								<a class="dropdown-item dropdown-base" href="#">Link 2</a>
								<div class="dropdown-divider dropdown-base"></div>
								<a class="dropdown-item dropdown-base" href="#">Link 3</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link a-iteam" href="#">
								<i class="material-icons" style='font-size:23px'>adjust</i> Editors
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link a-iteam" href="#">
								<i class="material-icons" style='font-size:23px'>audiotrack</i> Forms
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link a-iteam" href="#">
								<i class="material-icons" style='font-size:23px'>beenhere</i> Icoins
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link a-iteam" href="#">
								<i class="material-icons" style='font-size:23px'>blur_linear</i> Tables
							</a>
						</li>
						<li class="nav-item default-iteam">EXTRAS</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle a-iteam" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="small material-icons" style='font-size:23px'>camera_rear</i> App
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item dropdown-base" href="#">Link 1</a>
								<a class="dropdown-item dropdown-base" href="#">Link 2</a>
								<div class="dropdown-divider dropdown-base"></div>
								<a class="dropdown-item dropdown-base" href="#">Link 3</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle a-iteam" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="small material-icons" style='font-size:23px'>class</i> Page
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item dropdown-base" href="#">Link 1</a>
								<a class="dropdown-item dropdown-base" href="#">Link 2</a>
								<div class="dropdown-divider dropdown-base"></div>
								<a class="dropdown-item dropdown-base" href="#">Link 3</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle a-iteam" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="small material-icons" style='font-size:23px'>confirmation_number</i> Class
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item dropdown-base" href="#">Link 1</a>
								<a class="dropdown-item dropdown-base" href="#">Link 2</a>
								<div class="dropdown-divider dropdown-base"></div>
								<a class="dropdown-item dropdown-base" href="#">Link 3</a>
							</div>
						</li>
					</ul>
				</nav>
			</div>
			<div class="col-md-10 content-md10">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">Home</li>
					<li class="breadcrumb-item">
						<a href="#">Admin</a>
					</li>
					<li class="breadcrumb-item active">Dashboard</li>
				</ol>
				@yield ('content')
			</div>
		</div>
	</div>   
</body>
</html>