<?php
include_once "db/db_board.php";
session_start();
$nm= "";
if(isset($_SESSION["login_user"])) {
    $login_user= $_SESSION["login_user"];
}
$i_board= $_GET["i_board"];
$param= [
    "i_board" => $i_board
];
$item= sel_board($param);
$next_board= sel_next_board($param);
$prev_board= sel_prev_board($param);
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
    <main>
        <table id="container">
            <tr>
                <th colspan="6" class="read_title"><?=$item["title"]?></th>
            </tr>
            <tr>
                <td class="read">작성자</td>
                <td class="read2"><?=$item["nm"]?></td>
                <td class="read">수정일시</td>
                <td class="read2"><?=$item["updated_at"]?></td>
                <td class="read">조회수</td>
                <td class="read2_hit"><?=$item["hit"]?></td>
            </tr>
            <tr>
                <td colspan="6" class="read_ctnt" valign="top"><?=$item["ctnt"]?></td>
            </tr>
        </table>
        <center class="read_btn">
        <?php if($prev_board !==0) { ?>
            <a href="detail.php?i_board=<?=$prev_board?>"><button class='list_btn'>다음글</button></a>
        <?php } ?>
        <a href="list.php"><button class='list_btn'>리스트</button></a>
        <?php if($next_board !==0) { ?>
            <a href="detail.php?i_board=<?=$next_board?>"><button class='list_btn'>이전글</button></a>
        <?php } ?>
            <?php if(isset($_SESSION["login_user"]) && $login_user["i_user"] === $item["i_user"]) { ?>
            <a href="mod.php?i_board=<?=$i_board?>"><button class='list_btn'>수정</button></a>
            <button class='list_btn' onclick="isDel();">삭제</button>
            <?php } ?>
        </center>
    </main>
    </div>
    <script>
        function isDel() {
            console.log('isDel 실행됨!!');
            if(confirm('삭제하시겠습니까?')) {
                location.href= "del.php?i_board=<?=$i_board?>";
            }
        }
    </script>
</body>
</html>