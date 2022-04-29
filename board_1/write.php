<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글쓰기</title>
    <link rel="stylesheet" href="write.css">
</head>
<body>
    <?php
    session_start();
    if(!isset($_SESSION['id']))
    {
        header("Location: login.php");
    }
    ?>
    <form action="write_proc.php" method="post">
        <table class="table1">
            <tr class="title">
                <th>게시글 작성하기</th>
            </tr>
            <tr>
                <td>
                    <table class="table2">
                        <tr>
                            <td>작성자</td>
                            <td><input type="hidden" name="id" value="<?= $_SESSION['id']?>"><?=$_SESSION['id']?></td>
                        </tr>
                        <tr>
                            <td>제목</td>
                            <td><input type="text" name="title" size="70"></td>
                        </tr>
                        <tr>
                            <td>내용</td>
                            <td><textarea name="ctnt" cols="72" rows="10"></textarea></td>
                        </tr>
                    </table>
                    <center>
                        <input type="submit" class="btn" value="작성">
                        <input type="reset" class="btn" value="초기화">
                    </center>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>