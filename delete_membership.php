<?php
include "dbcon.php";
$student_id = $_GET["student_id"];
$sql = "DELETE FROM `members` WHERE student_id = $student_id";
$result = mysqli_query($con, $sql);	

if ($result) {
  header("Location: admindashboard.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($con);
}
