<?php
include_once "db/db_board.php";
session_start();
$nm= "";
if(isset($_SESSION["login_user"])) {
    $login_user= $_SESSION["login_user"];
    $nm= $login_user["nm"];
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
    <link rel="stylesheet" href="detail.css">
    <title><?=$item["title"]?></title>
</head>
<body>
    <div>
    <header>
        <?=isset($_SESSION["login_user"]) ? "<b>" . $nm . "</b>님 환영합니다." : "" ?>
        <?php if(isset($_SESSION["login_user"])) { ?>
            <a href="logout.php"><button class='btn'>로그아웃</button></a><br>
        <?php } else { ?>
            <a href="login.php"><button class='btn'>로그인</button></a><br>
        <?php } ?>        
    </header>
    <main>
        <table id="container">
            <tr>
                <th colspan="6" class="read_title"><?=$item["title"]?></th>
            </tr>
            <tr>
                <td class="read">작성자</td>
                <td class="read2"><?=$item["nm"]?></td>
                <td class="read">등록일시</td>
                <td class="read2"><?=$item["created_at"]?></td>
                <td class="read">조회수</td>
                <td class="read2_hit"><?=$item["hit"]?></td>
            </tr>
            <tr>
                <td colspan="6" class="read_ctnt" valign="top"><?=$item["ctnt"]?></td>
            </tr>
        </table>
        <center class="read_btn">
        <a href="list.php"><button class='list_btn'>리스트</button></a>
            <?php if(isset($_SESSION["login_user"]) && $login_user["i_user"] === $item["i_user"]) { ?>
            <a href="mod.php?i_board=<?=$i_board?>"><button class='list_btn'>수정</button></a>
            <button class='list_btn'>삭제</button>
            <?php } ?>
        </center>
    </main>
    </div>
</body>
</html>