<?php
include_once "db.php";

// check.php, join_proc.php, login_proc.php
function sel_user(&$param) {
    $uid= $param["uid"];

    $sql=
    "   SELECT i_user, uid, upw, nm, tel, addr, email
        FROM t_user
        WHERE uid = '${uid}'
    ";

    $conn= get_conn();
    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
    return mysqli_fetch_array($result);
}

// join_proc.php
function ins_join(&$param) {
    $nm= $param["nm"];
    $uid= $param["uid"];
    $upw= $param["upw"];
    $tel= $param["tel"];
    $addr= $param["addr"];
    $email= $param["email"];

    $conn= get_conn();
    $sql= 
    "   INSERT INTO t_user
        (uid, upw, nm, tel, addr, email, created_at)
        VALUES 
        ('$uid', '$upw', '$nm', '$tel', '$addr', '$email', now())
    ";
    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

// addr_proc.php
function sel_addr(&$param) {
    $addr= $param["addr"];
    $arr= explode(" ", $addr);

    if(isset($arr[1])) {
        $sql=
        "   SELECT * 
            FROM zipcode 
            WHERE doro='$arr[0]' 
            AND build_no1='$arr[1]'
        ";        
    } else {
        $sql=
        "   SELECT * 
              FROM zipcode 
             WHERE doro='$arr[0]' 
             ORDER BY build_no1 ASC  
        ";
    }
    // echo "$sql";
    $conn= get_conn();
    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}