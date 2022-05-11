<?php
    include_once "../db/db_user.php";

    $uid= $_POST["uid"];
    $upw= $_POST["upw"];

    $param= [
        "uid" => $uid
    ];

    $result= sel_user($param);
    if(!$result) { ?>
        <script>
            alert ("일치하는 아이디가 없습니다.") ;
            history.back();
        </script>
    <?php exit; } 
    
    if($result["upw"]===$upw) {
        session_start();
        $_SESSION["login_user"]= $result; 
        header("Location: ../board/index.php");
    } else { ?>
        <script>
            alert("비밀번호가 일치하지 않습니다.");
            history.back();
        </script>
    <?php } ?>
        