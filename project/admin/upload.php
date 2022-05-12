<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/upload.css">
    <title>Upload</title>
</head>
<body>
    <div class="container">
        <div class="main">
            <a href="../board/index.php">←메인</a>        
        </div>  
        <fieldset>
            <legend><h3>🌼 Upload 🌼</h3></legend>
            <form action="upload_proc.php" method="post" enctype="multipart/form-data">
                <div>
                    <input type="file" id="file" name="pic_img" accept="img/*">
                    <input type="submit" class="button" value="upload">
                </div>
            </form>            
        </fieldset>      
    </div>
</body>
</html>