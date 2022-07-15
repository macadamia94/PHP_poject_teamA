<?php
    include_once 'db.php';

    function ins_usr(&$param) {
        $uid = $param["uid"];
        $upw = $param["upw"];
        $nm = $param["nm"];
        $gender = $param["gender"];

        $conn = get_conn();
        $sql = "INSERT INTO t_user (uid, upw, nm, gender)
                VALUES ('$uid', '$upw', '$nm', $gender)";
        
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        
        return $result;
    }

    function sel_user(&$param) {
        $uid = $param["uid"];

        $conn = get_conn();
        $sql = "SELECT * FROM t_user
                WHERE uid = '$uid'";
        
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);

        return mysqli_fetch_assoc($result);
    }

    function upd_profile_img(&$param) {
        $profile_img = $param['profile_img'];
        $i_user = $param['i_user'];
        $conn = get_conn();
        $sql = "UPDATE t_user 
                SET profile_img = '$profile_img'
                WHERE i_user = '$i_user'";

        $rs = mysqli_query($conn, $sql);
        mysqli_close($conn);

        return $rs;
    }

    function selProfile(&$param) {
        $iuser = $param["i_user"];

        $conn = get_conn();
        $sql = "SELECT aa.*, bb.nm, bb.profile_img FROM t_board aa, t_user bb
                WHERE aa.i_user = bb.i_user AND aa.i_user = '$iuser'
                ORDER BY i_board desc";

        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);

        return $result;
    }
