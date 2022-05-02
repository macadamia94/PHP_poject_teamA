<?php
include_once "db/db_board.php";

session_start();
$login_user= $_SESSION["login_user"];
$i_user= $login_user["i_user"];

$i_board= $_POST["i_board"];
$title= $_POST["title"];
$ctnt= $_POST["ctnt"];

$param= [
    "i_board" => $i_board,
    "i_user" => $i_user,
    "title" => $title,
    "ctnt" => $ctnt
];

$result= upd_board($param);

if($result) { ?>
    <script>
        alert("수정되었습니다.");
        location.href= "detail.php?i_board=<?=$i_board?>";
    </script>
<?php } ?>