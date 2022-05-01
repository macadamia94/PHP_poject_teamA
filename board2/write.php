<?php
    session_start();
    $nm= "";
    $uid= "";
    if(isset($_SESSION["login_user"])) {
        $login_user= $_SESSION["login_user"];
        $nm= $login_user["nm"];
        $uid= $login_user["uid"];
    }else{
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="write.css">
    <title>글쓰기</title>
</head>
<body>
    <form action="write_proc.php" method="post">
        <table id="container">
            <tr class="title">
                <th>글쓰기</th>
            </tr>
            <tr>
                <td>
                    <table class="table2">
                        <tr>
                            <td>작성자</td>
                            <td><input type="hidden" name="uid" value="<?=$uid?>"><?=$nm?></td>
                        </tr>
                        <tr>
                            <td>제목</td>
                            <td><input type="text" name="title" placeholder="제목" size=70></td>
                        </tr>
                        <tr>
                            <td>내용</td>
                            <td><textarea name="ctnt" placeholder="내용" cols=72 rows=10></textarea></td>
                        </tr>
                    </table>
                    <center>
                        <input type="submit" class="btn" value="글등록">
                        <input type="reset" class="btn" value="초기화">
                    </center> 
                </td>
            </tr>
        </table>
    </form>
</body>
</html>