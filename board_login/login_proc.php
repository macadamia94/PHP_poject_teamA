<?php
    include_once "db/db_user.php";

    $uid = $_POST["uid"];
    $upw = $_POST["upw"];

    echo "uid : ", $uid, "<br>";
    echo "upw : ", $upw, "<br>";

    $param=  [
        "uid" => $uid
    ];

    $result= sel_user($param);
    if(empty($result)) {
        echo "해당하는 아이디 없음";
        die;
    }

    echo "i_user :" , $result["i_user"], "<br>";
    echo "pw :" , $result["upw"], "<br>";

    if($result["upw"]===$upw) {
        session_start();
        $_SESSION["login_user"] = $result;
        header("Location: list.php");
    }else{
        header("Location: login.php");
    }