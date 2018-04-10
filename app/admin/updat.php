<?php
require_once '../config/config.php';



if(isset(/*$_POST['full_name'],$_POST['username'],$_POST['password'],$_POST['email'],*/$_GET['user_id']))
{
    $user= getById($_GET['user_id']); 
    
 }  

if(isset($_POST['full_name'],$_POST['username'],$_POST['password'],$_POST['email'],$_GET['user_id'])){
    
     $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
      $email = $_POST['email'];
     $id = $_POST['user_id'];
    
    
   // $user = getUserById($_GET['user_id']);
    update($full_name, $username, $password, $email, $id);
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
		<form class="form" action="updat.php" method="post">
			<div class="form-group">
				Full Name<input type="text" name="full_name" value="<?php echo $user['full_name']; ?>" class="form-control">
			</div>
			<div class="form-group">
				Username<input type="text" name="username" value="<?php echo $user['username'] ?>" class="form-control">
			</div>
			<div class="form-group">
				Password<input type="password" name="password" value="" class="form-control">
			</div>
			<div class="form-group">
				email<input type="text" name="email"  value="<?php echo $user['email']; ?>"class="form-control">
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
 
         
        
        