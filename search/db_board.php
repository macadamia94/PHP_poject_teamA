<?php
    include_once "db.php";

    function test(&$param){
        $conn = get_conn();
        $sql = "SELECT * FROM t_board";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function ins_board(&$param) {
        $i_user = $param["i_user"];
        $title = $param["title"];
        $ctnt = $param["ctnt"];

        $sql = 
        "   INSERT INTO t_board
            (title, ctnt, i_user)
            VALUES
            ('$title', '$ctnt', $i_user)
        ";

        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function sel_paging_count(&$param) {
        $row_count = $param["row_count"];
        $sql = "SELECT CEIL(COUNT(i_board) / $row_count) as cnt
                  FROM t_board";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn); 
        $row = mysqli_fetch_assoc($result);
        return $row["cnt"];
    }

    function sel_board_list(&$param) {
        $start_idx = $param["start_idx"];
        $row_count = $param["row_count"];
        $sql = "SELECT A.i_board, A.title, A.created_at, A.clickedCt
                     , B.nm
                  FROM t_board A
                 INNER JOIN t_user B
                    ON A.i_user = B.i_user
                 ORDER BY A.i_board DESC
                 LIMIT $start_idx, $row_count";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function board_clicked_count_up(&$param){
        $i_board = $param["i_board"];
        $conn = get_conn();
        $select_qurey = "SELECT clickedCt FROM t_board WHERE i_board = $i_board";
        $ori_count = mysqli_fetch_row(mysqli_query($conn, $select_qurey))[0] + 1;
        $update_qurey = "UPDATE t_board SET clickedCt = $ori_count WHERE i_board = $i_board";
        mysqli_query($conn, $update_qurey);
        mysqli_close($conn);
    }

    function sel_board(&$param) {
        $i_board = $param["i_board"];
        $sql = "SELECT A.title, A.ctnt, A.created_at
                     , B.i_user, B.nm
                  FROM t_board A
                 INNER JOIN t_user B
                    ON A.i_user = B.i_user
                 WHERE A.i_board = $i_board";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);        
        return mysqli_fetch_assoc($result);
    }

    //다음글 (최신글)
    function sel_next_board(&$param) {
        $i_board = $param["i_board"];
        $sql = "SELECT i_board
                  FROM t_board
                 WHERE i_board > $i_board
                 ORDER BY i_board
                 LIMIT 1";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);        
        $row = mysqli_fetch_assoc($result);
        if($row) {
            return $row["i_board"];
        }
        return 0;
    }

    //이전글 (지난글)
    function sel_prev_board(&$param) {
        $i_board = $param["i_board"];
        $sql = "SELECT i_board
                  FROM t_board
                 WHERE i_board < $i_board
                 ORDER BY i_board DESC
                 LIMIT 1";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);        
        $row = mysqli_fetch_assoc($result);
        if($row) {
            return $row["i_board"];
        }
        return 0;
    }

    function upd_board(&$param) {
        $i_board = $param["i_board"];
        $title = $param["title"];
        $ctnt = $param["ctnt"];
        $i_user = $param["i_user"];

        $sql = "UPDATE t_board
                   SET title = '$title'
                     , ctnt = '$ctnt'
                     , updated_at = now()
                 WHERE i_board = $i_board
                   AND i_user = $i_user";
         $conn = get_conn();
         $result = mysqli_query($conn, $sql);
         mysqli_close($conn);
         return $result;
    }

    function del_board(&$param) {
        $i_board = $param["i_board"];
        $i_user = $param["i_user"];

        $sql = "DELETE FROM t_board 
                 WHERE i_board = $i_board 
                   AND i_user = $i_user";
        $conn = get_conn();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }

    function search_board(&$param){
        $conn = get_conn();
        $search_select = $param['search_select']; //select선택값
        $search_input_txt = $param['search_input_txt']; //검색어
        $textArray = explode(" ", $search_input_txt);//검색어를 공백으로 나눈다
        $where = []; //sql검색 시 열(속성) 이름
        $qurey = "SELECT A.i_board, A.title, A.ctnt, A.created_at, A.clickedCt, B.i_user, B.nm
        FROM t_board A
        INNER JOIN t_user B
        ON A.i_user = B.i_user
        WHERE ";

        switch($search_select){
            case "search_writer":
                $where += ["B.nm"];
                break;
            case "search_title":
                $where += ["A.title"];
                break;
            case "search_ctnt":
                $where += ["A.ctnt", "A.title"];
                break;
        }

        for ($i = 0; $i < count($textArray); $i++) {
            for ($j = 0; $j < count($where); $j++) {
                $qurey = $qurey." $where[$j] LIKE '%$textArray[$i]%' ";
                //마지막 검색어가 아니면
                if(($i !== count($textArray) - 1) || ($j !== count($where) - 1)){ 
                    $qurey = $qurey."OR";
                }
            }
        }

        $result = mysqli_query($conn, $qurey);
        mysqli_close($conn);
        return $result;
    }