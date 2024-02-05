<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<div class="form-wrapper">
  
  <form action="#" method="post">
    <h2><p align="center">Welcome to English Enthusiasts Club!</p></h2>
    <p align="center">Please login to continue</p>

	
    <div class="form-item">
		<input type="text" name="user" required="required" placeholder="Username" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Password" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login"></input>
    </div>
  </form>
  <?php
	if (isset($_POST['login']))
		{
			$username = mysqli_real_escape_string($con, $_POST['user']);
			$password = mysqli_real_escape_string($con, $_POST['pass']);
			
			$query 		= mysqli_query($con, "SELECT * FROM members WHERE  password='$password' and username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['student_id']=$row['student_id'];
					header('location:scms.php');
					
				}
			else
				{
					echo 'Invalid Username and Password Combination';
				}
		}

	
  ?>
  <div class="reminder">
    <p>Not a member? <a href="add-new.php">Register now</a></p>
    <p>Login as Admin? <a href="indexadmin.php">Login as Admin</a></p>
  </div>
  
</div>

</body>
</html>