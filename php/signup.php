<?php
  $ID=$_POST["usr_id"];
  $PW=$_POST["usr_pw"];

  $servername = "localhost";
  $username = "root";
  $password="";
  $dbname="starmoa"

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "INSERT INTO user_info (id, pw)
  VALUES ($ID, $PW)";

  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
?>
