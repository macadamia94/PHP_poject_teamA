<?php
    include_once "db/db_user.php";

    $uid= $_POST["uid"];
    $upw= $_POST["upw"];
    $confirm_upw= $_POST["confirm_upw"];
    $nm= $_POST["nm"];
    $gender= $_POST["gender"];

    $param= [
        "uid" => $uid,
        "upw" => $upw,
        "nm" => $nm,
        "gender" => $gender
    ];

    $id_check = sel_join($param);
    if($id_check) { ?>
        <script>
            alert("이미 존재하는 아이디 입니다.");
            history.back();
        </script>
    <?php } else {
        $result = ins_join($param);
        if($result) { ?>
            <script>
                alert("회원가입에 성공하였습니다.");
                location.replace("login.php");
            </script>
    <?php } else {?>
            <script>
                alert("회원가입에 실패하였습니다.");
            </script>
        <?php }
    } ?>