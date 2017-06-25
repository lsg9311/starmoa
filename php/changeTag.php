<?php
  $type=$_POST["type"];
  $tag_idx=$_POST["tag_idx"];
  $tag_name=$_POST["tag_name"];
  $tag_smry=$_POST["tag_smry"];

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
      $sql = "INSERT INTO tag(tag_name,summary) VALUES (\"$tag_name\",\"$tag_smry\")";
      if (mysqli_query($conn, $sql)) {
        echo "추가 완료";
      } else {
          echo "추가 실패<br/></br/>";
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      break;
    case 1:
      $sql = "UPDATE tag SET summary=\"$tag_smry\", tag_name=\"$tag_name\" WHERE tag_idx=\"$tag_idx\"";
      if (mysqli_query($conn, $sql)) {
        echo "수정 완료";
      } else {
          echo "수정 실패<br/></br/>";
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      break;
    case 2:
      $sql = "DELETE FROM tag WHERE idx=$tag_idx";
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
