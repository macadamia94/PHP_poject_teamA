<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/container.css">
    <title>로그인</title>
</head>
<body>
    <div id="container">
        <?php include('../header.php') ?>
        <div class="main">
            <h1>로그인</h1>
            <div class="login_area">
                <form action="login_proc.php" method="POST">
                    <div class="id"><input type="text" name="uid" placeholder="아이디"></div>
                    <div class="pw"><input type="password" name="upw" placeholder="비밀번호"></div>
                    <div class="sb_btn"><input type="submit" value="로그인"></div>
                </form>
            </div>
            <a href="join.php"><button>회원가입</button></a>
        </div>
    </div>
</body>
</html>
