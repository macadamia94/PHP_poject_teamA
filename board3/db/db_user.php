<?php
include_once "db.php";

// check.php, join_proc.php, login_proc.php
function sel_user(&$param) {
    $u_nick= $param["u_nick"];

    $sql=
    "   SELECT u_num, u_nick, u_pw, u_mail
        FROM user_t
        WHERE u_nick = '${u_nick}'
    ";

    $conn= get_conn();
    $result= mysqli_query($conn, $sql);
    mysqli_close($conn);
    return mysqli_fetch_array($result);
}

// join_proc.php
function ins_join(&$param) {
    $u_nick= $param["u_nick"];
    $u_pw= $param["u_pw"];
    $u_mail= $param["u_mail"];

    $conn= get_conn();
    $sql= 
    "   INSERT INTO user_t
        (u_nick, u_pw, u_mail, u_date)
        VALUES 
        ('$u_nick', '$u_pw', '$u_mail', now())
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