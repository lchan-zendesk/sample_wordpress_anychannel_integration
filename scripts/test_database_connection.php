<?php
  $servername = "localhost";
  $username = "wordpress";
  $password = "wordpress";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully\n";
?>