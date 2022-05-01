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

function sel_paging_count(&$param) {
    $row_count= $param["row_count"];
    $sql= 
    "   SELECT CEIL(COUNT(i_board) / $row_count) as cnt
        FROM t_board
    ";
    $conn= get_conn();
    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
    $row= mysqli_fetch_assoc($result);
    return $row["cnt"];
}

function sel_board_list($param){
    $start_idx= $param["start_idx"];
    $row_count= $param["row_count"];

    $sql=
    "   SELECT B.i_board, B.title, B.created_at, B.hit
             , U.nm
          FROM t_board B
         INNER JOIN t_user U
            ON B.i_user = U.i_user
         ORDER BY B.i_board DESC
         LIMIT $start_idx, $row_count
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

function del_board(&$param) {
    $i_board= $param["i_board"];
    $i_user= $param["i_user"];

    $sql= 
    "   DELETE FROM t_board
         WHERE i_board= ${i_board}
           AND i_user= ${i_user}
    ";
    $conn= get_conn();
    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}