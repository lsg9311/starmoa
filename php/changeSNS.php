<?php
  $type=$_POST["type"];
  $star_idx=$_POST["star_idx"];
  $sns_type=$_POST["sns_type"];
  $sns_addr=$_POST["sns_addr"];

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

  switch ($type) {
    case 0:
      $sql = "INSERT INTO sns(star_idx,sns_type,addr) VALUES (\"$star_idx\",\"$sns_type\",\"$sns_addr\")";
      if (mysqli_query($conn, $sql)) {
        echo "추가 완료";
      } else {
          echo "추가 실패<br/></br/>";
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      break;
    case 1:
      $sql = "UPDATE sns SET addr=\"$sns_addr\" WHERE star_idx=\"$star_idx\", sns_type=\"$sns_type\"";
      if (mysqli_query($conn, $sql)) {
        echo "수정 완료";
      } else {
          echo "수정 실패<br/></br/>";
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      break;
    case 2:
      $sql = "DELETE FROM sns WHERE idx=$star_idx, sns_type=\"$sns_type\"";
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
  echo "<meta http-equiv='refresh' content='3;url=../main/admin.php'>";
?>
