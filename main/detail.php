<?php
  $star_idx=$_GET["idx"];
  $star_name=$_GET["star_name"];

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

  echo "<table>";
  echo "<tr>
  <td colspan=2>이름</td>
  <td colspan=2>".$star_name."</td>
  <td rowspan=2><button>pick</button></td>
  </tr>";
  $tag_sql = "SELECT tag_name FROM star_has_tag NATURAL JOIN tag WHERE star_idx=\"$star_idx\"";
  $tag_result=mysqli_query($conn, $tag_sql);
  echo"<tr><td colspan=2>관련 태그</td><td colspan=2>";
  while ($tag_row = mysqli_fetch_assoc($tag_result)){
    echo "#".$tag_row["tag_name"]." ";
  }
  echo "</td></tr>";
  $sns_sql = "SELECT sns_type, addr FROM sns WHERE star_idx=\"$star_idx\"";
  $sns_result=mysqli_query($conn, $sns_sql);
  if(mysqli_num_rows($sns_result)>0){
    echo"<tr><td colspan=5>주소</td></tr>";
    while ($sns_row = mysqli_fetch_assoc($sns_result)){
      echo"<tr><td colspan=1>".$sns_row["sns_type"]."</td><td colspan=4>";
      echo $sns_row["addr"];
      echo "</td></tr>";
    }
  }
  echo "</table>";
?>
<html>
<head>
  <style type="text/css">
    table,tr,td{border:1px solid black;}
    td{text-align:center;}
  </style>
</head>
</html>
