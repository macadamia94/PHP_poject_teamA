<?php
    session_start();
    include_once '../database/db_user.php';

    $uid = $_POST['uid'];
    $upw = $_POST['upw'];

    $param = [
        "uid" => $uid
    ];

    $rs = sel_user($param);

    // if(empty($rs)) {
    //     echo "<script>alert('아이디가 틀렸습니다.');</script>";
    //     exit;
    // }

    // echo "i_user : ", $rs["i_user"], "<br>";
    // echo "upw : ", $rs["upw"], "<br>";
    
    if(password_verify($upw, $rs["upw"])) {
        $_SESSION["login_user"] = $rs;
        echo "<script>location.href = '../board/list.php';</script>";
        // header("Location: list.php");
    } else {
        echo "<script>alert('아이디 또는 비밀번호가 틀렸습니다.');</script>";
        echo "<script>location.href = 'login.php';</script>";
        // header("Location: login.php");
    }
