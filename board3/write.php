<?php
session_start();
$uid="";
$nm="";
if(isset($_SESSION["login_user"])) {
    $login_user= $_SESSION["login_user"];
    $uid= $login_user["uid"];
    $nm= $login_user["nm"];
} else { ?>
    <script>
        alert('비회원입니다!');
        location.href= "main.php";
    </script>
<?php } ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글쓰기</title>
</head>
<body>
    <form action="write_proc.php" method="post" autocomplete="off">
        <div><input type="text" size="25" name="title" placeholder="제목" require></div>
        <hr width="250px" align="left">
        <div><textarea name="ctnt" cols="35" rows="15" placeholder="내용을 입력하세요."></textarea></div>
        <div><input type="submit" value="글쓰기"></div>
    </form>
</body>
</html>