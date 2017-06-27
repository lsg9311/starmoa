<?php
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
  $tag_sql = "SELECT tag_name,summary FROM  tag WHERE tag_idx=\"$tag_idx\"";
  $tag_result=mysqli_query($conn, $tag_sql);
  $tag_row = mysqli_fetch_assoc($tag_result);
  $tag_name=$tag_row['tag_name'];
  $tag_smry=$tag_row['summary'];
  echo "<table>";
  echo "<tr>
  <td>태그명</td>
  <td>".$tag_name."</td>
  <td><button onclick=\"location.replace('../php/likeTag.php?idx=".$tag_idx."')\">like</button></td>
  </tr>";
  echo "<tr>
  <td>설명</td>
  <td colspan=2>".$tag_smry."</td>
  </tr>";
  echo "</table><br /><br /><br /><br /><br />";
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
