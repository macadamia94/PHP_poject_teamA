<?php
    session_start();
    include_once '../database/db_board.php';

    $i_board = $_GET['i_board'];
    $i_re = $_GET['i_re'];
    $login_user = $_SESSION["login_user"];
    $i_user = $login_user['i_user'];

    $param = [
        "i_board" => $i_board,
        "i_user" => $i_user,
        "i_re" => $i_re,
    ];
    $rs = del_reply($param);

    echo "<script>location.href='detail.php?i_board=$i_board';</script>";
