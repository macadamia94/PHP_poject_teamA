<?php 
include_once "../db/db_board.php";
session_start();

if(isset($_SESSION["login_user"])) {
    $login_user= $_SESSION["login_user"];
}

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
    <link rel="stylesheet" href="../css/write.css">
    <title><?=$item["title"]?></title>
</head>
<body>
    <div><a href="index.php">← MAIN</a></div>
    <h2>글조회 | <?=$item["nm"]?></h2>
    <div><input type="text" class="box" size="25" name="title" placeholder="제목" value="<?=$item["title"]?>"></div>
    <hr color="#9ab6a6">
    <div><textarea name="ctnt" class="box" cols="83" rows="15" placeholder="내용을 입력하세요."><?=$item["ctnt"]?></textarea></div>
    <hr color="#9ab6a6">
    <div><a href="../files/upload/<?=$item["i_user"]?>/<?=$item["files"]?>" download><?= $item["files"] == '' ? '파일없음' : $item["files"]?></a></div>
</body>
</html>