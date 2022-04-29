<?php
include_once "db.php";

function ins_board(&$param) {
    $i_user= $param["i_user"];
    $title= $param["title"];
    $ctnt= $param["ctnt"];

    $sql=
    "   INSERT INTO t_board
        (i_user, title, ctnt)
        VALUES
        ($i_user, '$title', '$ctnt')
    ";
    $conn= get_conn();
    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}