<?php
    session_start();
    include_once '../database/db_board.php';

    $i_board = $_GET['i_board'];
    $login_user = $_SESSION["login_user"];
    $i_user = $login_user['i_user'];

    $param = [
        "i_board" => $i_board,
        "i_user" => $i_user
    ];
    $rs = del_board($param);

    echo "<script>location.href='list.php';</script>";
