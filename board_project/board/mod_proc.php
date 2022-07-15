<?php
    session_start();
    include_once '../database/db_board.php';

    $login_user = $_SESSION["login_user"];
    $i_user = $login_user['i_user'];
    $i_board = $_POST['i_board'];
    $title = $_POST['title'];
    $ctnt = $_POST['ctnt'];
    
    $filename = $_POST['filename'];
    $dir = "images/".$filename;
    move_uploaded_file($_FILES['filename']['tmp_name'], "$dir");

    $param = [
        "i_board" => $i_board,
        "i_user" => $i_user,
        "title" => $title,
        "ctnt" => $ctnt,
        "filename" => $filename,
    ];
    $rs = upd_board($param);

    if($rs) {
        header("Location: detail.php?i_board=$i_board");
    }
    