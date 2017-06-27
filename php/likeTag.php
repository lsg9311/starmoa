<?php
if(!isset($_COOKIE["user_name"])){
  echo "FAILED";
}
else{
  $user_name=$_COOKIE["user_name"];
  $tag_idx=$_GET["idx"];

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

  $sub_sql = "SELECT user_idx FROM user_info WHERE nickname=\"$user_name\"";
  $result=mysqli_query($conn,$sub_sql);
  $row=mysqli_fetch_assoc($result);
  $user_idx=$row["user_idx"];

  $sql = "INSERT INTO user_like_tag(user_idx,tag_idx) VALUES ($user_idx,$tag_idx)";
  if (mysqli_query($conn, $sql)) {
    echo "등록 완료";
  } else {
      echo "등록 실패<br/></br/>";
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  $conn->close();
  echo "<meta http-equiv='refresh' content='3;url=../main/main.php'>";
}
?>
