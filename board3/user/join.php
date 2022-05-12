<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/join.css">
    <title>회원가입</title>
</head>
<body>
    <header>
        <a href="../board/index.php">← MAIN</a>
    </header>
    <fieldset>
        <legend><h2>🌼　회원가입　🌼</h2></legend>
        <form action="join_proc.php" method="post" name="join" autocomplete="off">
            <div><input type="text" name="u_nick" id="u_nick" class="data" placeholder="닉네임" required autofocus></div>
            <input type="hidden" name="decide_nick" id="decide_nick">
            <div><span id="decide" style='color:red;'>닉네임 중복 여부를 확인해주세요.</span>
            <input type="button" id="check_button" value="중복 검사" onclick="checknick();"></div>
            <div><input type="password" name="u_pw" id="u_pw" class="data" placeholder="비밀번호" required></div>
            <div><input type="password" name="u_pw2" id="u_pw2" class="data" placeholder="비밀번호 확인" required></div>
            <div><input type="text" name="u_mail1" id="u_mail1" class="data" onfocus="this.value=''" placeholder="이메일 주소" required>
               @ <input type="text" name="u_mail2" class="data" value="" disabled>
                <select name="u_mail" class="data" onchange="mail_change()">
                    <option value="0">선택하세요</option>
                    <option value="naver.com">naver</option>
                    <option value="hanmail.net">hanmail</option>
                    <option value="daum.net">daum</option>
                    <option value="gmail.com">gmail</option>
                    <option value="nate.com">nate</option>
                    <option value="1">직접입력</option>
                </select> 
            </div>
            <div><input type="submit" class="join_button" id="join_button" onclick="pw_check();" value="가입하기" disabled></div>
        </form>        
    </fieldset>
    <small><a href="login.php">이미 회원이신가요?</a></small>
    <script src="join.js"></script>
</body>
</html>