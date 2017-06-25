<html>
<head>
  <meta charset="utf-8" />
  <script src="../js/admin.js"></script>
</head>
<body>
  <form action="../php/changeStar.php" method="post" name="star">
    <input type="hidden" value="5" name="type" />
    <fieldset>
      <legend>스타 관리</legend>
      <label for="star_idx">일련번호 : </label>
      <input type="text" id="star_idx" name="star_idx"/><br  />
      <label for="star_name">이름 : </label>
      <input type="text" name="star_name"/><br  />
      <label for="star_smry">내용 : </label>
      <input type="text" name="star_smry"/><br  />
      <input type="button" value="추가" onclick="send_change(star,0)"/>
      <input type="button" value="수정" onclick="send_change(star,1)"/>
      <input type="button" value="삭제" onclick="send_change(star,2)"/>
    </fieldset>
 </form>
  <form action="../php/changeSNS.php" method="post" name="sns">
    <input type="hidden" value="5" name="type" />
    <fieldset>
      <legend>주소 관리</legend>
      <label for="star_idx">스타 일련번호 : </label>
      <input type="text" id="star_idx" name="star_idx"/><br  />
      <label for="sns_type">SNS 종류 : </label>
      <input type="text" id="sns_type" name="sns_type"/><br  />
      <label for="sns_addr">주소 : </label>
      <input type="text" id="sns_addr" name="sns_addr"/><br  />
      <input type="button" value="추가" onclick="send_change(sns,0)"/>
      <input type="button" value="수정" onclick="send_change(sns,1)"/>
      <input type="button" value="삭제" onclick="send_change(sns,2)"/>
    </fieldset>
  </form>
  <form action="../php/changeTag.php" method="post" name="tag">
    <input type="hidden" value="5" name="type" />
    <fieldset>
      <legend>태그 관리</legend>
      <label for="tag_idx">태그 일련번호 : </label>
      <input type="text" id="tag_idx" name="tag_idx"/><br  />
      <label for="tag_name">태그 : </label>
      <input type="text" id="tag_name" name="tag_name"/><br  />
      <input type="button" value="추가" onclick="send_change(tag,0)"/>
      <input type="button" value="수정" onclick="send_change(tag,1)"/>
      <input type="button" value="삭제" onclick="send_change(tag,2)"/>
    </fieldset>
  </form>
  <form action="../php/allocTag.php" method="post" name="starsns">
    <input type="hidden" value="5" name="type" />
    <fieldset>
      <legend>태그 연결</legend>
      <label for="star_idx">스타 일련번호 : </label>
      <input type="text" id="star_idx" name="star_idx"/><br  />
      <label for="tag_name">태그 이름 : </label>
      <input type="text" id="tag_name" name="tag_name"/><br  />
      <input type="button" value="부여" onclick="send_change(starsns,0)"/>
      <input type="button" value="해제" onclick="send_change(starsns,1)"/>
    </fieldset>
  </form>
</body>
</html>
