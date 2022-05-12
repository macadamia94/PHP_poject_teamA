<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test1.css">
    <title>Document</title>
</head>
<body>
<form name="join_form" action="join_ok.php" method="post">
  <div>
    <label>아이디<input type="text" name="udi" id="uid"></label>
    <button type="button" onclick="id_check();">중복확인</button>
  </div>
  <div><label>비밀번호<input type="password" name="pwd" id="pwd" placeholder="영문자+숫자+특수문자 조합"></label></div>
  <div><label>비밀번호 재확인<input type="password" name="repwd" id="repwd"></label></div>
  <div><label>이름<input type="text" name="uname" id="uname"></label></div>
  <div>
    <label>
      <!--생년월일 예전에는 option 형식이었지만 현재는 text type으로 변경 추세-->
      생년월일<input type="text" name="yy" id="yy" placeholder="년(4자)" maxlength="4">
      <select name="mm" id="mm">
        <option value="">월</option>
        <option value="01">1</option>
        <option value="02">2</option>
        <option value="03">3</option>
        <option value="04">4</option>
        <option value="05">5</option>
        <option value="06">6</option>
        <option value="07">7</option>
        <option value="08">8</option>
        <option value="09">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
      </select>
    </label>
    <input type="text" name="dd" id="dd" placeholder="일" maxlength="2">
  </div>
  <div>
    <!--radio버튼은 둘 중의 하나만 선택하려면 name값을 같게 줘야함
			radio 버튼은 DB저장과 상관이 없음 value="" 따로 값을 넣어서 DB 값이 전송됨
			radio 버튼은 id값을 하나만 설정이 가능하므로 radio 경우만 id값 다르게 설정-->
    성별<input type="radio" value="F" name="gender" id="female">여
    <!--"여"에 미리 체크되있을 경우<input type="radio" value="F" name="sex" id="female" checked>여-->
    <input type="radio" value="M" name="gender" id="male">남
  </div>
  <div>
    <label>전화번호<input type="tel" name="mobile" id="mobile"> ex "-"없이 숫자만 입력</label>
  </div>
  <div>
    <label>이메일<input type="text" name="email_id" id="email_id">@</label>
    <input type="text" name="email_add" id="email_add">
    <select name="email_sel" id="email_sel" onchange="change_email();">
      <!--onchage: select안에 있는 옵션들의 값이 바꼈을때 명령이 실행
			 onclick을 안하는 이유: 키보드 사용자는 click을 할수 없으므로-->
      <option value="">직접입력</option>
      <option value="naver.com">naver</option>
      <option value="gmail.com">gmail</option>
      <option value="nate.com">nate</option>
    </select>
  </div>
  <div>
    <label>주소<input type="text" name="postal_code" id="postal_code"></label>
    <button type="button" onclick="search_address();">검색</button>
  </div>
  <div>
    <label>기본주소<input type="text" name="addr1" id="addr1" size="30"></label>
  </div>
  <div>
    <label>상세주소<input type="text" name="addr2" id="addr2" size="30"></label>
  </div>
  <div>
    <label>약관동의<input type="checkbox" value="Y" name="agree" id="agree">약관에 동의합니다.</label>
  </div>
  <div class="join_btn">
    <button type="button" onclick="history.back();">이전페이지로</button>
    <!-- (window삭제).history.back 뒤로가기/history.forward 앞으로가기-->
    <button type="button" onclick="joinform_check();">가입하기</button>
    <!-- 입력된 경우에 따라서 다르게 액션되면 button으로, 입력 값 상관 없이 무조건 보내기면 submit -->
    <!-- type을 submit으로 하여 전송하기를 하지말고, script가서 함수를 만들고 전송하기를 함 button onclick으로 함수를 불러옴 함수안에 문제가 있는 경우 return false;-->
  </div>
</form>
<script src="test1.js"></script>
</body>
</html>