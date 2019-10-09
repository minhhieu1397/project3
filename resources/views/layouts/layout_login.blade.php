<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Timesheet</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand header-left" href="#">Please</a>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
			</ul>

			<ul class="form-inline my-2 my-lg-0 navbar-nav nav_login">
				<li class="nav-item active">
					<a class="nav-link" href="{{ route('users.create') }}">Đăng kí</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="{{ route('login') }}">Đăng Nhập</a>
				</li>
			</ul>
		</div>
	</nav>
  <!-- Page Content -->	
	<div class="container-fluid">
		@yield ('content')
	</div>
</body>
</html>