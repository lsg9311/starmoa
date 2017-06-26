<?php
  $user_name=$_COOKIE["user_name"];
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
  <td rowspan=2><button onclick=\"location.replace('../php/addPick.php?idx=".$star_idx."')\">pick</button></td>
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
  echo "</table><br /><br /><br /><br /><br />";

  //reply
  echo "<table>";
  $reply_sql = "SELECT nickname, content FROM user_info JOIN reply ON (idx=user_idx) WHERE star_idx=\"$star_idx\"";
  $reply_result=mysqli_query($conn, $reply_sql);

  while ($reply_row = mysqli_fetch_assoc($tag_result)){
    echo $reply_row["nickname"];
    echo "<tr><td>".$reply_row["nickname"]."</td>";

    echo "<td colspan=4>".$reply_row["content"]."</td></tr>";
  }
  echo "<form action='../php/addReply.php' method='post'>";
  echo "<input type='hidden' name='idx' value='".$star_idx."' />";
  echo "<tr><td><input type='text' value='".$user_name."' name='user_name' readonly /></td>";
  echo "<td colspan=3><input type='text' name='content'/> </td>";
  echo "<td><input type='submit' value='등록'/></td></tr>";
  echo "</form></table>";
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
