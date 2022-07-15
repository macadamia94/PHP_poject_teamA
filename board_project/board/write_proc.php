<?php
    session_start();
    include_once '../database/db_board.php';
    
    $login_user = $_SESSION["login_user"];
    
    $i_user = $login_user["i_user"];
    $title = $_POST["title"];
    $ctnt = nl2br($_POST["ctnt"]);

    $filename = $_FILES['filename']['name'];
    $dir = "images/".$filename;
    move_uploaded_file($_FILES['filename']['tmp_name'], "$dir");

    $param = [
        "i_user" => $i_user,
        "title" => $title,
        "ctnt" => $ctnt,
        "filename" => $filename,
    ];

    $rs = ins_board($param); 

    if($rs) {
        header("Location: list.php");
    }
    