<?php
include_once "db_1.php";

$number= $_GET["number"];

$connect= get_connect();
$query= "SELECT * FROM board WHERE number=$number";
$result= mysqli_query($connect, $query);
mysqli_close($connect);

if($row= mysqli_fetch_assoc($result)) {
    $title= $row["title"];
    $ctnt= $row["ctnt"];
    $id= $row["id"];
}
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="write.css">	
    <title>글수정</title>
</head>
<body>
    <form action="mod_proc.php" method="post">
        <table class= "table1">
            <tr class= "title">
                <th>게시글 수정하기</th>
            </tr>
            <td>
                <table class="table2">
                    <tr>
                        <td>작성자</td>
                        <td><input type="hidden" name="id" value="<?=$_SESSION["id"]?>"><?=$_SESSION["id"]?></td>
                    </tr>
                    <tr>
                        <td>제목</td>
                        <td><input type="text" size="70" name=title value="<?= $title ?>"></td>
                    </tr>
                    <tr>
                        <td>내용</td>
                        <td><textarea name=ctnt cols="72" rows="10"><?= $ctnt ?></textarea></td>
                    </tr>
                </table>
                <center>
                    <input type="hidden" name="number" value="<?= $number ?>">	
                    <input type="submit" class="btn" value="작성">	
                    <input type="reset" class="btn" value="초기화">
                </center>
            </td>
        </table>
    </form>
</body>
</html>