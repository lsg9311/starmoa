<?php
  ob_start();

  $ID=$_POST["usr_id"];
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

  $sql = "SELECT * FROM user_info WHERE id=\"$ID\" AND pw=\"$PW\"";
  $result=mysqli_query($conn, $sql);

  if (mysqli_num_rows($result)>0) {
    echo "로그인 완료";
    $row=mysqli_fetch_assoc($result);
    $usr_idx=$row["user_idx"];
    $usr_name=$row["nickname"];
    setcookie("user_idx", $usr_idx, time() + (86400 * 30), "/");
    setcookie("user_name", $usr_name, time() + (86400 * 30), "/");
    ob_end_flush();

    if($is_admin=$row["admin"]){
        echo "<meta http-equiv='refresh' content='3;url=../main/admin.php'>";
    }
    else{
      echo "<meta http-equiv='refresh' content='3;url=../main/main.php'>";
    }
  } else {
      echo "로그인 실패<br/></br/>";
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      ob_end_flush();
      echo "<meta http-equiv='refresh' content='3;url=../main/index.html'>";
  }
  $conn->close();
?>
