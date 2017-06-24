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
      echo "<meta http-equiv='refresh' content='3;url=../main/admin.php'>";
      break;
    case 1:

      break;
    case 2:
      # code...
      break;

    default:
      echo "wrong access";
      break;
  }

  $conn->close();
?>
