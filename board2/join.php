<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="join.css">
    <title>회원가입</title>
</head>
<body class="container">
    <h1>회원가입</h1>
    <form action="join_proc.php" method="post">
        <div><input type="text" name="uid" placeholder="아이디" autofocus></div>
        <div><input type="password" name="upw" placeholder="비밀번호"></div>
        <div><input type="password" name="confirm_upw" placeholder="비밀번호 확인"></div>
        <div><input type="text" name="nm" placeholder="이름"></div>
        <div>성별 : <label>여자<input type="radio" name="gender" value="0" checked></label>
                    <label>남자<input type="radio" name="gender" value="1"></label>
        </div>
        <div>
            <input type="submit" class="btn" value="회원가입">
            <input type="reset" class="btn" value="초기화">
        </div>
        <a href="login.php">로그인</a>
    </form>
</body>
</html>