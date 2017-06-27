<?php
  $user_name=$_COOKIE["user_name"];

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
  // get user_idx
  $user_sql = "SELECT idx FROM user_info WHERE nickname=\"$user_name\"";
  $user_result=mysqli_query($conn, $user_sql);
  $user_row = mysqli_fetch_assoc($user_result);
  $user_idx=$user_row['idx'];
  //Star
  echo "<table>";
  $star_sql = "SELECT star_idx,name FROM user_pick NATURAL JOIN star_info WHERE user_idx=\"$user_idx\"";
  $star_result=mysqli_query($conn, $star_sql);
  echo "<tr><td>관심 연예인</td></tr>";
  if(mysqli_num_rows($star_result)>0){
  while ($star_row = mysqli_fetch_assoc($star_result)){
    $star_idx=$star_row["star_idx"];
    $star_name=$star_row["name"];
    echo "<tr><td><a href='./detail.php?idx=".$star_idx."&star_name=".$star_name."'>".$star_name."</a></td></tr>";
    }
  }

  echo "</table><br /><br /><br />";
  //Tag
  echo "<table>";
  $tag_sql = "SELECT tag_idx,tag_name FROM tag NATURAL JOIN user_like_tag WHERE user_idx=\"$user_idx\"";
  $tag_result=mysqli_query($conn, $tag_sql);

  echo "<tr><td>관심 태그</td></tr>";
  if(mysqli_num_rows($tag_result)>0){
  while ($tag_row = mysqli_fetch_assoc($tag_result)){
    $tag_idx=$tag_row["tag_idx"];
    $tag_name=$tag_row["tag_name"];
    echo "<tr><td><a href='./tag.php?idx=".$tag_idx."'>".$tag_name."</a></td></tr>";
  }
}
  echo "</table>";
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
