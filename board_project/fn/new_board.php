<?php
    include_once '../database/db.php';

    function new_board() {
        date_default_timezone_set("Asia/Seoul");
        $today = date("Y.m.d");

        $conn = get_conn();
        $sql = "SELECT * FROM t_board 
                WHERE date_format(created_at, '%Y.%m.%d') = '$today'";
        
        $rs = mysqli_query($conn, $sql);
        $list = mysqli_num_rows($rs);
        mysqli_close($conn);

        return $list;
    }