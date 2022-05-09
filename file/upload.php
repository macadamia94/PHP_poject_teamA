<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload_proc.php" method="POST" enctype="multipart/form-data">
        <!-- 파일 업로드시에는 반드시 method는 'POST'로 해주고
            enctype="multipart/form-data" 를 넣어 줘야함 -->
        <div><label>이미지 <input type="file" name="img" accept="image/*"></label></div>
        <!-- accept="image/*" 는 옵션
            파일 선택 클릭시 확장자가 이미지인 것만 나오도록 하는 것 -->
        <div><input type="submit" value="업로드"></div>
    </form>
</body>
</html>