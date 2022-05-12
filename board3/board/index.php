<?php
include_once "../db/db_board.php";

session_start();
$u_nick= "";
if(isset($_SESSION["login_user"])) {
    $login_user= $_SESSION["login_user"];
    $u_nick= $login_user["u_nick"];
}
$list= sel_board_list();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Board</title>
</head>
<body>
    <div>
        <?php if(isset($_SESSION["login_user"])) { ?>
            <a href="../user/logout.php">로그아웃</a>
        <?php } else { ?>
            <a href="../user/login.php">로그인</a>
            <a href="../user/join.php">회원가입</a>
        <?php } ?>
    </div>
    <div class="top"><h2>게시판</h2></div>
    <table>
        <tr>
            <th width=100>Post ID</th>
            <th width=300>내용</th>
            <th width=120>작성자</th>
            <th width=200>작성일</th>
            <th width=70>조회수</th>
        </tr>
    </table>
    <center>
        <button class="no" onclick="location.href='write.php'">글쓰기</button>        
    </center>
</body>
</html>