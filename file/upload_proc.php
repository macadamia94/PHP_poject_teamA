<?php    
    //$_FILES에 담긴 배열 정보 구하기.
    // 업로드된 파일의 내장정보
    // 개발단계에서만 사용 런칭때는 주석처리 또는 삭제
    var_dump($_FILES);

    // 임시로 저장된 정보(tmp_name)
$tempFile = $_FILES['img']['tmp_name'];

// 파일타입 및 확장자 체크
// explode는 $_FILES['img']와 $_FILES['type']를 "/" 기준으로 나누는것
$fileTypeExt = explode("/", $_FILES['img']['type']);

// 파일 타입 
$fileType = $fileTypeExt[0]; //image

// 파일 확장자
$fileExt = $fileTypeExt[1]; //jpg, png 등

// 확장자 검사
$extStatus = false;

switch($fileExt) {
	case 'jpeg':
	case 'jpg':
	case 'gif':
	case 'bmp':
	case 'png':
		$extStatus = true;
		break;
	
	default:
		echo "이미지 전용 확장자(jpg, bmp, gif, png)외에는 사용이 불가합니다."; 
		exit;
		break; // 위에서 exit;를 적었기 때문에 굳이 break;를 적을 필요는 없다
}

// 이미지 파일이 맞는지 검사. 
if($fileType == 'image'){
	// 허용할 확장자를 jpg, bmp, gif, png로 정함, 그 외에는 업로드 불가
	if($extStatus){
        // 폴더를 만들지 않아도 에러가 나지 않고 만들어지게 하기 위함
        $res_path = "../img";
        if(!is_dir($res_path)) { //← 이 식은 폴더 없는 경우 true
            mkdir($res_path, 0777, true); 
            // mkdir : 폴더 작성
            // 0777 : 폴더의 모든 권한 허용함
        }
		// 임시 파일 옮길 디렉토리 및 파일명
		$resFile = $res_path . "/{$_FILES['img']['name']}"; // ← 이건 이름 그대로 쓰고 있음
        // 한글명이 있을 수 있기 때문에 이름을 그대로 쓰지 않고 UUID를 쓰는 것이 좋다
		// 임시 저장된 파일을 우리가 저장할 디렉토리 및 파일명으로 옮김
		$imageUpload = move_uploaded_file($tempFile, $resFile); //불린 타입 값이 넘어가
		
		// 업로드 성공 여부 확인
		if($imageUpload == true){
			echo "파일이 정상적으로 업로드 되었습니다. <br>";
			echo "<img src='{$resFile}' width='100'>";
		}else{
			echo "파일 업로드에 실패하였습니다.";
		}
	}	// end if - extStatus
		// 확장자가 jpg, bmp, gif, png가 아닌 경우 else문 실행
	else {
		echo "파일 확장자는 jpg, bmp, gif, png 이어야 합니다.";
		exit; // 여기도 굳이 없어도 됨
	}	
}	// end if - filetype
	// 파일 타입이 image가 아닌 경우 
else {
	echo "이미지 파일이 아닙니다.";
	exit; // 뒤에 실행할 소스가 있을 경우 실행되지 않기 위해 씀
          // 지금은 뒤에 소스가 없기 때문에 굳이 쓰지 않아도 됨
}