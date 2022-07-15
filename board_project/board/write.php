<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/write.css">
    <link rel="stylesheet" href="../css/container.css">
    <title>글쓰기</title>
</head>
<body>
    <div id="container">
        <?php include('../header.php') ?>
        <div class="main">
            <h1>글쓰기</h1>
            <div class="write_area">
                <form action="write_proc.php" method="POST" enctype="multipart/form-data">
                    <div class="title"><input type="text" name="title" placeholder="제목"></div>
                    <div class="ctnt"><textarea name="ctnt" placeholder="내용"></textarea></div>
                    <div class="file"><input type="file" name="filename"></div>
                    <div class="btn">
                        <input type="submit" value="글쓰기" class="sb_btn">
                        <input type="reset" value="초기화" class="rs_btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>