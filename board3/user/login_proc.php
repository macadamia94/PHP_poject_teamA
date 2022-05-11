<?php
    include_once "../db/db_user.php";

    $u_nick= $_POST["u_nick"];
    $u_pw= $_POST["u_pw"];

    echo "uid : ", $u_nick, "<br>";
    echo "upw : ", $u_pw, "<br>";

    $param= [
        "u_nick" => $u_nick
    ];

    $result= sel_user($param);
    if(!$result) { ?>
        <script>
            alert ("일치하는 아이디가 없습니다.") ;
            history.back();
        </script>
    <?php exit; } 
    
    if($result["u_pw"]===$u_pw) {
        session_start();
        $_SESSION["login_user"]= $result; 
        header("Location: ../board/index.php");
    } else { ?>
        <script>
            alert("비밀번호가 일치하지 않습니다.");
            history.back();
        </script>
    <?php } ?>
        