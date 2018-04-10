<?php
require_once '../config/config.php';
if(isset($_POST['full_name'],$_POST['username'],$_POST['password'],$_POST['email']))
{
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
       $email = $_POST['email'];
    
    insert($full_name, $username, $password, $email);
}




?>
<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
	<link rel="stylesheet" 
			type="text/css" 
			href="templates/css/bootstrap.min.css">

	<link rel="stylesheet" 
			type="text/css" 
			href="templates/css/base.css">
</head>
<body>
	<div class="container">
        
        
   <div class="row">
	<div class="col-12">
		<div class="title-header">
			<h3>ADD USER</h3>
			<a href="index.php">ALL USERS</a>
		</div>
	</div>
	<div class="col-12">
		<form class="form" action="add.php" method="post">
			<div class="form-group">
				Full Name<input type="text" name="full_name" class="form-control">
			</div>
			<div class="form-group">
				Username<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				Password<input type="password" name="password" class="form-control">
			</div>
			<div class="form-group">
				Re-Password<input type="text" name="email" class="form-control">
			</div>

			<div class="form-group">
				<button type="submit" class="btn">
					Save
				</button>					
			</div>
		</form>
	</div>
</div>     
        
</div>
</body>
</html>
        
        
        
        