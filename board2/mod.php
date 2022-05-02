<?php
    include_once "db/db_board.php";
    $i_board= $_GET["i_board"];
    $param= [
        "i_board" => $i_board
    ];
    $item= sel_board($param);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="write.css">
    <title>글 수정</title>
</head>
<body>
    <form action="mod_proc.php" method="post">
        <table id="container">
            <tr class="title">
                <th>글 수정</th>
            </tr>
            <td>
                <table class="table2">
                    <tr>
                        <td>작성자</td>
                        <td><input type="hidden" name="i_board" value="<?=$i_board?>" readonly><?=$item["title"]?></td>
                    </tr>
                    <tr>
                        <td>제목</td>
                        <td><input type="text" size="70" name=title placeholder="제목" value="<?=$item["title"]?>"></td>
                    </tr>
                    <tr>
                        <td>내용</td>
                        <td><textarea name="ctnt" placeholder="내용" cols="72" rows="10"><?=$item["ctnt"]?></textarea></td>
                    </tr>
                </table>
                <center>
                    <input type="submit" class="btn" value="글수정">
                    <input type="reset" class="btn" value="초기화">
                </center>
            </td>
        </table>
    </form>
</body>
</html>