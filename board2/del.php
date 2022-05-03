<?php
include_once "db/db_board.php";
session_start();
$login_user= $_SESSION["login_user"];
$i_board= $_GET["i_board"];
$i_user= $login_user["i_user"];
$param= [
    "i_board" => $i_board,
    "i_user" => $i_user
];
$result= del_board($param);
if($result) { ?>
    <script>
    alert("삭제되었습니다.");
    location.href= "list.php";
    </script>
<?php } ?>