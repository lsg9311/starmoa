<?php
  $ID=$_POST["usr_id"];
  $PW=$_POST["usr_pw"];

  $servername = "localhost";
  $username = "root";

// Create connection
$conn = new mysqli($servername, $username);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connect";

$sql = "SELECT id, pw FROM user_info WHERE id=$ID && pw=$PW";
$result = mysqli_query($conn, $sql);


echo mysqli_num_rows($result);
?>
