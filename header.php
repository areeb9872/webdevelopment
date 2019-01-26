<!DOCTYPE html>
<html>
<head>
	<title>First Project</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
  <body>


<nav class="navbar navbar-expand-md round navbar-dark bg-dark">
		<a href="" class="navbar-brand"><img src="assets/img/img5.png" class="img-fluid"  height="50" width="50">Web Development</a>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsible-div">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsible-div">
			<ul class="navbar-nav  justify-content-end w-100" >
				<li class="nav-item">
				<a href="index.php" class="nav-link">Home</a>
				</li>
				<li class="nav-item">
				<a href="about.php" class="nav-link">AboutUs</a>></li>
				<li class="nav-item">
				<a href="contact.php" class="nav-link">ContactUs</a>></li>
				<li class="nav-item">
				<a href="image.php" class="nav-link">Images</a>></li>
				<li class="nav-item">
				<a href="portiofolio.php" class="nav-link">PortFolio</a>></li>
				
			</ul>
			<ul class="navbar-nav justify-content-end w-100">
				<li class="nav-item">
				<a href="#" class="nav-link" data-toggle="modal" data-target="#SignUp" data-backdrop="static" keyboard="false"><i class="fas fa-user-plus"></i>SignUp</a>></li>
				<li class="nav-item">
				<a href="#" class="nav-link" data-toggle="modal" data-target="#LogIn" data-backdrop="static" keyboard="false"><i class="fas fa-sign-in-alt"></i>LoginIn</a>></li>
			</ul>
		</div>
	</nav>

	<div class="fade modal" id="SignUp" tabindex="-1" >
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">SignUp</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>User Name</label>
						<input class="form-control" type="text" name="name">
                     </div>
                     <div class="form-group">
						<label>Email</label>
						<input class="form-control" type="email" name="email">
                     </div>
                     <div class="form-group">
						<label>Password</label>
						<input class="form-control" type="password" name="password">
                     </div>
                     <div class="form-group">
						<label>Confirm Password</label>
						<input class="form-control" type="password" name="confirm_password">
                     </div>
					
				</div>
				<div class="modal-footer">
					<button class="btn btn-success">Submit</button>
					<button class="btn btn-danger" data-dismiss="modal">Close</button>
					
				</div>
			</div>
		</div>
	</div>

	<div class="fade modal" id="LogIn" tabindex="-1">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">LoginIn</h4>
				</div>
				<div class="modal-body">
					 <div class="form-group">
						<label>User Name</label>
						<input class="form-control" type="text" name="name" placeholder="User Name">
                     </div>
                     <div class="form-group">
						<label>Email</label>
						<input class="form-control" type="email" name="email">
                     </div>
                     <div class="form-group">
						<label>Password</label>
						<input class="form-control" type="password" name="password">
                     </div>
                     <div class="form-group">
						<label>Confirm Password</label>
						<input class="form-control" type="password" name="confirm_password">
                     </div> 
					
				</div>
				<div class="modal-footer">
					<button class="btn btn-success">Submit</button>
					<button class="btn btn-danger" data-dismiss="modal">Close</button>
					
				</div>
			</div>
		</div>
	</div> <br> <br> <br>

</body>