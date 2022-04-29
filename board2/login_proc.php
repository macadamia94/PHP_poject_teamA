<?php
    include_once "db/db_user.php";

    $uid= $_POST["uid"];
    $upw= $_POST["upw"];

    $param= [
        "uid" => $uid
    ];

    $id_check = sel_join($param);
    if(!$id_check) { ?>
        <script>
            alert("아이디를 확인해주세요.");
            history.back();
        </script>
    <?php } 
    
    $result= sel_user($param);
    if($result["upw"]===$upw) {
        session_start();
        $_SESSION["login_user"]= $result;
        header("Location: list.php");
    } else { ?>
        <script>
            alert("비밀번호를 확인해주세요.");
            history.back();
        </script>
    <?php } ?>

    