<?php
  $star_idx=$_POST["idx"];
  $user_name=$_POST["user_name"];
  $content=$_POST["content"];

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

  $sub_sql = "SELECT idx FROM user_info WHERE nickname=\"$user_name\"";
  $result=mysqli_query($conn,$sub_sql);
  $row=mysqli_fetch_assoc($result);
  $user_idx=$row["idx"];

  $sql = "INSERT INTO reply(user_idx,star_idx,content) VALUES ($user_idx,$star_idx,\"$content\")";
  if (mysqli_query($conn, $sql)) {
    echo "등록 완료";
  } else {
      echo "등록 실패<br/></br/>";
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  $conn->close();
  echo "<meta http-equiv='refresh' content='3;url=../main/main.php'>";
 ?>
 <html>
 <head>
   <meta charset="utf-8" />
   <style type="text/css">
     table,tr,td{border:1px solid black;}
     td{text-align:center;}
   </style>
 </head>
 </html>
