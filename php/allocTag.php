<?php
  $type=$_POST["type"];
  $star_idx=$_POST["star_idx"];
  $tag_idx=$_POST["tag_idx"];

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
      $sql = "INSERT INTO star_has_tag(star_idx,tag_idx) VALUES ($star_idx,$tag_idx)";
      if (mysqli_query($conn, $sql)) {
        echo "등록 완료";
      } else {
          echo "등록 실패<br/></br/>";
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      break;
    case 1:
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
  echo "<meta http-equiv='refresh' content='3;url=../main/admin.php'>";
?>
