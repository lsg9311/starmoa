<?php
  $ID=$_POST["usr_id"];
  $name=$_POST["usr_name"];
  $PW=$_POST["usr_pw"];

  $servername = "localhost";
  $username = "root";
  $password="";
  $dbname="starmoa";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password,$dbname);

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "INSERT INTO user_info (id, nickname, pw) VALUES (\"$ID\",\"$name\",\"$PW\")";

  if (mysqli_query($conn, $sql)) {
    echo "회원가입 완료";
    echo "<meta http-equiv='refresh' content='3;url=../main/index.html'>";
  } else {
      echo "회원가입 실패<br/></br/>";
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      echo "<meta http-equiv='refresh' content='3;url=../main/signup.html'>";
  }

$conn->close();
?>
