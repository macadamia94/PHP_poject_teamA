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

function sel_board_list(){
$sql=
    "   SELECT B.i_board, B.title, B.created_at, B.hit
             , U.nm
          FROM t_board B
         INNER JOIN t_user U
            ON B.i_user = U.i_user
         ORDER BY B.i_board DESC
    ";
    $conn= get_conn();
    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function sel_board(&$param) {
    $i_board= $param["i_board"];

    $sql= 
    "   SELECT B.title, B.ctnt, B.created_at, B.hit
             , U.i_user, U.nm
          FROM t_board B
         INNER JOIN t_user U
            ON B.i_user = U.i_user
         WHERE B.i_board = ${i_board}
    ";
    $conn= get_conn();
    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
    return mysqli_fetch_assoc($result);
}