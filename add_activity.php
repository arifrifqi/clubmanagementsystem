<?php
include "dbcon.php";

if (isset($_POST["submit"])) {
   $activity_name = $_POST['activity_name'];
   $activity_date = $_POST['activity_date'];
   $club_name = $_POST['club_name'];
   

   $sql = "INSERT INTO `activity`(`activity_id`, `activity_name`, `activity_date`, `club_name`) VALUES (NULL,'$activity_name','$activity_date','$club_name')";

   $result = mysqli_query($con, $sql);

   if ($result) {
      header("Location: admindashboard.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($con);
   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>English Enthusiasts Club Activity Information</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #D3D3D3;">
      English Enthusiasts Club Activity Information
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Add New Activity</h3>
         <p class="text-muted">Complete the form below to add a new activity</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:500px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Activity Name:</label>
                  <input type="text" class="form-control" name="activity_name" placeholder="Please insert activity name">
               </div>

               <div class="col">
                  <label class="form-label">Activity Date:</label>
                  <input type="date" class="form-control" name="activity_date" placeholder="YYYY-MM-DD">
               </div>
			   
			   <div class="col">
                  <label class="form-label">Club Name (Collaboration):</label>
                  <input type="text" class="form-control" name="club_name" placeholder="Insert the club name">
               </div>
            </div>

            
            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="admindashboard.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>