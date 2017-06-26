<?php
  $type=$_POST["type"];
  $star_idx=$_POST["star_idx"];
  $star_name=$_POST["star_name"];
  $star_smry=$_POST["star_smry"];

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
      $sql = "INSERT INTO star_info(name,summary) VALUES (\"$star_name\",\"$star_smry\")";
      if (mysqli_query($conn, $sql)) {
        echo "추가 완료";
      } else {
          echo "추가 실패<br/></br/>";
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      break;
    case 1:
      $sql = "UPDATE star_info SET name=\"$star_name\", summary=\"$star_smry\" WHERE star_idx=$star_idx";
      if (mysqli_query($conn, $sql)) {
        echo "수정 완료";
      } else {
          echo "수정 실패<br/></br/>";
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      break;
    case 2:
      $sql = "DELETE FROM star_info WHERE star_idx=$star_idx";
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
