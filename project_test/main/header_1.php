<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header_1.css">
    <script src="https://kit.fontawesome.com/b249cf6f22.js" crossorigin="anonymous"></script>
    <title>header</title>
</head>

<body>
    <div id="h_container">
        <header>
            <!-- 햄버거 버튼 눌렀을 때 나오는 카테고리 -->
            <?php include('category.php'); ?>

            <!-- 가운데 이미지 삽입-->
            <div class="mid"><a href="../main/main.php"><img src="../images/logo/header_logo.png" alt="우리동네미술관"></a></div>
            
            <!-- 로그인 세션 -->
            <?php if (isset($_SESSION['login_user'])) { ?>
                <div class="right"><a href="../user/logout.php">로그아웃</a></div>
            <?php } else { ?>
                <div class="right"><a href="../user/login.php">로그인</a> | <a href="../user/join.php">회원가입</a></div>
            <?php } ?>
        </header>
    </div>
</body>

</html>