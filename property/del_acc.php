<?php
$con=mysqli_connect("localhost","root","","db_property");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
  	echo "Berhasil";
  }

// Perform queries
mysqli_query($con,"truncate table contact");

mysqli_close($con);
?> 