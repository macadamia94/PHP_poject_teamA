<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <style>
        div {
            text-align: center;
            display: grid;
            justify-content: center;
            margin-bottom: 15px;
        }
        .btn{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div>
        <h1>회원가입</h1>
        <form action="register_proc.php" method="post">
            <div><input type="text" name="id" placeholder="아이디"></div>
            <div><input type="password" name="pw" placeholder="패스워드"></div>
            <input type="submit" class="btn" value="가입하기">
            <input type="reset" class="btn" value="초기화">
        </form>
        <a href="login.php"><button>로그인</button></a>
    </div>
</body>
</html>