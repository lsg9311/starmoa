<?php
  if(isset($_COOKIE["user_name"])){
    echo $_COOKIE["user_name"]."님 환영합니다";
  }
  echo "<a href='./mypage.php'>mypage</a>";
?>
<html>
<head>
  <meta charset="utf-8" />
  <script src="../js/main.js"></script>
  <link rel="stylesheet" href="../css/main.css" />
</head>
<body>
  <form action="./search.php" method="post" name="search_info">
    <select name="query_type"/>
      <option value="name">이름</option>
      <option value="tag">태그</option>
    </select>
    <label for="query">검색어 : </label>
    <input type="text" id="query" name="query"/>
    <input type="submit" value="SEARCH" />
  </form>
</body>
</html>
