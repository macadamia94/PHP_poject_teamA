<?php
    include_once "db.php";

    $uid= $_POST["uid"];
    $title= $_POST["title"];
    $ctnt= $_POST["ctnt"];
    $create_at= date("Y-m-d H:i:s");

    $conn= get_conn();
    $sql= 
    "INSERT INTO t_board
    (uid, title, ctnt, create_at, hit)
    VALUES
    ('$uid', '$title', '$ctnt', '$create_at', '$hit')
    ";

    $result= mysqli_query($conn, $sql);

    if($result) {
        header("Location: list.php");
    }
