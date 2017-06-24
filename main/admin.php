<html>
<head>
  <meta charset="utf-8" />
</head>
<body>
  <form action="../php/changeStar.php" method="post">
    <fieldset>
      <legend>스타 추가</legend>
      <input type="hidden" name="type" value=0/>
      <label for="star_name">이름 : </label>
      <input type="text" id="star_name" name="star_name"/><br  />
      <label for="star_smry">내용 : </label>
      <input type="text" id="star_smry" name="star_smry"/><br  />
      <input type="submit" value="추가"/>
    </fieldset>
    <fieldset>
      <legend>스타 수정</legend>
      <input type="hidden" name="type" value=1/>
      <label for="star_idx">일련번호 : </label>
      <input type="text" id="star_idx" name="star_idx"/><br  />
      <label for="star_name">이름 : </label>
      <input type="text" id="star_name" name="star_name"/><br  />
      <label for="star_smry">내용 : </label>
      <input type="text" id="star_smry" name="star_smry"/><br  />
      <input type="submit" value="수정"/>
    </fieldset>
    <fieldset>
      <legend>스타 삭제</legend>
      <input type="hidden" name="type" value=2/>
      <label for="star_idx">일련번호 : </label>
      <input type="text" id="star_idx" name="star_idx"/><br  />
      <input type="submit" value="삭제"/>
    </fieldset>
  </form>
  <form action="../php/changeSNS.php" method="post">
    <fieldset>
      <legend>주소 추가</legend>
      <input type="hidden" name="type" value=0/>
      <label for="star_idx">스타 일련번호 : </label>
      <input type="text" id="star_idx" name="star_idx"/><br  />
      <label for="sns_type">SNS 종류 : </label>
      <input type="text" id="sns_type" name="sns_type"/><br  />
      <label for="sns_addr">주소 : </label>
      <input type="text" id="sns_addr" name="sns_addr"/><br  />
      <input type="submit" value="추가"/>
    </fieldset>
    <fieldset>
      <legend>주소 수정</legend>
      <input type="hidden" name="type" value=1/>
      <label for="star_idx">스타 일련번호 : </label>
      <input type="text" id="star_idx" name="star_idx"/><br  />
      <label for="sns_type">SNS 종류 : </label>
      <input type="text" id="sns_type" name="sns_type"/><br  />
      <label for="sns_addr">주소 : </label>
      <input type="text" id="sns_addr" name="sns_addr"/><br  />
      <input type="submit" value="수정"/>
    </fieldset>
    <fieldset>
      <legend>주소 삭제</legend>
      <input type="hidden" name="type" value=2/>
      <input type="hidden" name="type" value=0/>
      <label for="star_idx">스타 일련번호 : </label>
      <input type="text" id="star_idx" name="star_idx"/><br  />
      <label for="sns_type">SNS 종류 : </label>
      <input type="text" id="sns_type" name="sns_type"/><br  />
      <input type="submit" value="삭제"/>
    </fieldset>
  </form>
  <form action="../php/changeTag.php" method="post">
    <fieldset>
      <legend>태그 추가</legend>
      <input type="hidden" name="type" value=0/>
      <label for="tag_name">이름 : </label>
      <input type="text" id="tag_name" name="tag_name"/><br  />
      <input type="submit" value="추가"/>
    </fieldset>
    <fieldset>
      <legend>태그 수정</legend>
      <input type="hidden" name="type" value=1/>
      <label for="tag_idx">태그 일련번호 : </label>
      <input type="text" id="tag_idx" name="tag_idx"/><br  />
      <label for="tag_name">태그 : </label>
      <input type="text" id="tag_name" name="tag_name"/><br  />
      <input type="submit" value="수정"/>
    </fieldset>
    <fieldset>
      <legend>태그 삭제</legend>
      <input type="hidden" name="type" value=2/>
      <label for="tag_name">태그 : </label>
      <input type="text" id="tag_name" name="tag_name"/><br  />
      <input type="submit" value="삭제"/>
    </fieldset>
  </form>
  <form action="../php/allocTag.php" method="post">
    <fieldset>
      <legend>태그 부여</legend>
      <input type="hidden" name="type" value=0/>
      <label for="star_idx">스타 일련번호 : </label>
      <input type="text" id="star_idx" name="star_idx"/><br  />
      <label for="tag_name">태그 이름 : </label>
      <input type="text" id="tag_name" name="tag_name"/><br  />
      <input type="submit" value="부여"/>
    </fieldset>
    <fieldset>
      <legend>태그 해제</legend>
      <input type="hidden" name="type" value=1/>
      <label for="star_idx">스타 일련번호 : </label>
      <input type="text" id="star_idx" name="star_idx"/><br  />
      <label for="tag_name">태그 이름 : </label>
      <input type="text" id="tag_name" name="tag_name"/><br  />
      <input type="submit" value="해제"/>
    </fieldset>
  </form>
</body>
</html>
