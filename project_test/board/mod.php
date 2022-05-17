<?php
    include_once '../db/db_board.php';
    $b_id = $_GET["b_id"];
    $param = [
        "b_id" => $b_id
    ];
    $item = sel_board($param);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글수정</title>
</head>
<body>
    <h2>글수정</h2>
    <form action="mod_proc.php" method="post">
        <input type="hidden" name="b_id" value="<?=$b_id?>" readonly>
        <div><input type="text" name="b_title" placeholder="제목" value="<?=$item["b_title"]?>"></div>
        <div><textarea name="b_ctnt" cols="30" rows="10" placeholder="내용"><?=$item["b_ctnt"]?></textarea></div>
        <div>
            <input type="submit" value="수정">
            <input type="reset" value="초기화">
        </div>
    </form>
</body>
</html>