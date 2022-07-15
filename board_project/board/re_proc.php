<?php
    session_start();
    include_once '../database/db_board.php';
    
    $login_user = $_SESSION["login_user"];
    
    $i_user = $login_user["i_user"];
    $i_board = $_POST["i_board"];
    $ctnt = $_POST["ctnt"];
    $rv = $_POST['rv'];
    // echo $rv;

    $param = [
        "i_user" => $i_user,
        "i_board" => $i_board,
        "ctnt" => $ctnt,
        "rv" => $rv,
    ];
    if($ctnt != "") {
        $rs = ins_reply($param); 
    } else {
        echo "<script>alert('댓글을 작성해주세요');</script>";
        echo "<script>location.href='detail.php?i_board=$i_board';</script>";
    }
    
    echo $rs;
    if($rs) {
        header("Location: detail.php?i_board=$i_board");
    }