<?php
include "dbcon.php";
$contact_id = $_GET["contact_id"];
$sql = "DELETE FROM `contact` WHERE contact_id = $contact_id";
$result = mysqli_query($con, $sql);	

if ($result) {
  header("Location: admindashboard.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($con);
}
