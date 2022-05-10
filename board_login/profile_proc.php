<?php
    include_once "db/db_user.php";
    session_start();
    define("PROFILE_PATH", "img/profile/");

    $login_user= &$_SESSION["login_user"];
    
    var_dump($_FILES);
    if($_FILES["img"]["name"] === "") {
        echo "이미지 없음";
        exit;
    }

    // 파일명 함수 (UUID)
    function gen_uuid_v4() { 
        return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x'
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0x0fff) | 0x4000
            , mt_rand(0, 0x3fff) | 0x8000
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff)
            , mt_rand(0, 0xffff) 
        ); 
    }

    $img_name= $_FILES["img"]["name"];
    $last_index= mb_strrpos($img_name, ".");
    // strrpos : 대상 문자열을 뒤에서 부터 검색하여 찾고자 하는 문자열이 
    //           몇번째 위치에 있는지(인덱스값)를 리턴하는 함수
    $ext= mb_substr($img_name, $last_index);
    // substr : 문자열에서 특정한 구간의 문자열을 추출

    $target_filenm= gen_uuid_v4() . $ext; // 저장할 때 쓸 파일명
    $target_full_path= PROFILE_PATH . $login_user["i_user"];
    if(!is_dir($target_full_path)) { //← 이 식은 폴더 없는 경우 true
        mkdir($target_full_path, 0777, true); // true를 주면 파일여러개 생성가능
    }

    $tmp_img= $_FILES["img"]["tmp_name"];
                                             // path 값만 있기 때문에 파일명까지 적어줘야함
    $imageUpload= move_uploaded_file($tmp_img, $target_full_path . "/" . $target_filenm);
    // $imageUpload 는 boolean 타입 : if문에 바로 썼기 때문
    if($imageUpload) { //업로드 성공!         

        
        if($login_user["profile_img"]) { // 이전에 등록된 프사가 있나 확인
            $saved_img= $target_full_path . "/" . $login_user["profile_img"];
            if(file_exists($saved_img)) { //이전에 등록된 프사가 있으면 삭제!
                unlink($saved_img);
            }
        }

        //DB에 저장!
        $param= [
            "profile_img" => $target_filenm,
            "i_user" => $login_user["i_user"]
        ];
        $result= upd_profile_img($param);
        $login_user["profile_img"]= $target_filenm;
        header("Location: profile.php");
    } else { // 업로드 실패!
        echo "업로드 실패";
    }
