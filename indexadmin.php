<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
<div class="form-wrapper">
  
  <form action="#" method="post">
    <h2><p align="center">Welcome Administrator!</p></h2>
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
					header('location:admindashboard.php');
					
				}
			else
				{
					echo 'Invalid Username and Password Combination';
				}
		}


  ?>

  <div class="reminder">
    <p>Not an admin? <a href="add-new2.php">Register now</a></p>
  </div>  

</div>

</body>
</html>