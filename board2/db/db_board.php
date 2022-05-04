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

function sel_board_list(&$param){
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
    "   SELECT B.title, B.ctnt, B.created_at, B.updated_at, B.hit
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

function sel_hit_board(&$param) {
    $i_board= $param["i_board"];

    $sql=
    "   UPDATE t_board
           SET hit = hit + 1
         WHERE i_board= ${i_board}
    ";
    $conn= get_conn();
    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function sel_next_board(&$param) {
    $i_board= $param["i_board"];
    $sql=
    "   SELECT i_board
          FROM t_board
         WHERE i_board > $i_board
         ORDER BY i_board
         LIMIT 1
    ";
    $conn= get_conn();
    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
    $row= mysqli_fetch_assoc($result);
    if($row) {
        return $row["i_board"];
    }
    return 0;
}

function sel_prev_board(&$param) {
    $i_board= $param["i_board"];
    $sql=
    "   SELECT i_board
          FROM t_board
         WHERE i_board < $i_board
         ORDER BY i_board DESC
         LIMIT 1
    ";
    $conn= get_conn();
    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
    $row= mysqli_fetch_assoc($result);
    if($row) {
        return $row["i_board"];
    }
    return 0;
}

function upd_board(&$param) {
    $i_board= $param["i_board"];
    $i_user= $param["i_user"];
    $title= $param["title"];
    $ctnt= $param["ctnt"];

    $sql=
    "   UPDATE t_board
           SET title= '$title'
             , ctnt= '$ctnt'
             , updated_at= now()
         WHERE i_board= $i_board
           AND i_user= $i_user
    ";
    $conn= get_conn();
    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
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

function search_board(&$param) {
    $conn= get_conn();
    $search_select= $param['search_select']; //select선택값
    $search_input_txt= $param['search_input_txt']; // 검색어
    $textArray= explode(" ", $search_input_txt); //검색어를 공백으로 나눔
    $where= ""; // sql검색 시 열(속성) 이름
    $query= 
    "   SELECT B.i_board, B.title, B.ctnt, B.created_at, B.hit
             , U.i_user, U.nm
          FROM t_board B 
         INNER JOIN t_user U 
            ON B.i_user = U.i_user 
         WHERE 
    ";

    switch($search_select){
        case "search_writer" :
            $where = ["U.nm"];
            break;
        case "search_title" :
            $where = ["B.title"];
            break;
        case "search_ctnt" :
            $where = ["B.ctnt", "B.title"];
            break;

    }

    for ($i=0; $i < count($textArray); $i++) { 
        for ($j=0; $j < count($where); $j++) {
            $query= $query." $where[$j] LIKE '%$textArray[$i]%' ";
            // 마지막 검색어가 아니면
            if(($i !== count($textArray) - 1) || ($j !== count($where) - 1)){
                $query=$query. "OR";
            }
        }
    }

    //echo "$query";

    $result= mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
    //return null;
}