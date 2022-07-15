<?php
    session_start();
    include_once '../database/db_user.php';
    define("PROFILE_PATH", "../img/profile/");

    $login_user = &$_SESSION['login_user'];
    
    var_dump($_FILES);

    if($_FILES['img']['name'] == "") {
        echo "이미지 없음";
        exit;
    }

    function gen_uuid_v4() { 
        return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff), 
        mt_rand(0, 0x0fff) | 0x4000, 
        mt_rand(0, 0x3fff) | 0x8000, 
        mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff) ); 
    }
    // echo gen_uuid_v4();

    $img_name = $_FILES['img']['name'];
    $last_idx = mb_strrpos($img_name, ".");
    $ext = mb_substr($img_name, $last_idx);
    
    //db에 저장할 경로
    $target_filenm = gen_uuid_v4() . $ext;
    //실제 이미지 경로
    $target_full_path = PROFILE_PATH . $login_user['i_user'];
    
    if(!is_dir($target_full_path)) {
        mkdir($target_full_path, 0777, true);
    }

    $tmp_img = $_FILES['img']['tmp_name'];
    $image_upload = move_uploaded_file($tmp_img, $target_full_path . "/" . $target_filenm);
    
    if($image_upload) { //업로드 성공
        //ToDo : 이전에 등록된 프로필 있으면 삭제!
        if($login_user['profile_img']) {
            $saved_img = $target_full_path . "/" . $login_user['profile_img'];
            if(file_exists($saved_img)) {
                unlink($saved_img);
            }
        }
        //DB 저장
        $param = [
            "profile_img" => $target_filenm,
            "i_user" => $login_user['i_user']
        ];
        $rs = upd_profile_img($param);
        $login_user['profile_img'] = $target_filenm;

        header("Location: profile.php");
    } else {    //업로드 실패
        echo "업로드 실패!";
    }
