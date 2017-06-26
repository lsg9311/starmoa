<?php
  $query_type=$_POST["query_type"];
  $query=$_POST["query"];

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

  switch ($query_type) {
    case "name":
      $sql = "SELECT star_idx, name FROM star_info WHERE name=\"$query\"";
      $result=mysqli_query($conn, $sql);
      if (mysqli_num_rows($result)>0) {
        echo "검색 결과 <table><tr>
        <td>
        이름
        </td>
        <td>
        태그
        </td>
        </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            $star_idx = $row["star_idx"];
            $star_name = $row["name"];
            echo "<tr><td><a href='/detail.php?idx=".$star_idx."'>".$star_name."</a></td><td>";
            $tag_sql="SELECT tag_name FROM star_has_tag NATURAL JOIN tag WHERE star_idx=\"$star_idx\"";
            $tag_result=mysqli_query($conn, $tag_sql);
            while($tag_row = mysqli_fetch_assoc($tag_result)){
              echo "#".$tag_row["tag_name"]." ";
            }
            echo "</td></tr>";
        }
        $star_name=$row["idx"];
        $usr_name=$row["nickname"];
        echo "</table>";
      }
      else {
          echo "검색 결과가 없습니다<br/></br/>";
      }
      break;
    case "tag":
      $sql = "DELETE FROM star_has_tag WHERE star_idx=$star_idx, tag_idx=$tag_idx";
      if (mysqli_query($conn, $sql)) {
        echo "삭제 완료";
      } else {
          echo "삭제 실패<br/></br/>";
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      break;
    default:
      echo "wrong access";
      break;
  }
  $conn->close();
?>
<html>
<head>
  <style type="text/css">
    table,tr,td{border:1px solid black;}
  </style>
</head>
</html>
