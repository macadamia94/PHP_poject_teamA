<?php
    include_once '../database/db_board.php';

    $i_board = $_GET['i_board'];

    $param = [
        "i_board" => $i_board
    ];
    $rs = sel_board($param);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/write.css">
    <link rel="stylesheet" href="../css/container.css">
    <title>글수정</title>
</head>
<body>
    <div id="container">
        <?php include('../header.php') ?>
        <div class="main">
            <h1>글수정</h1>
            <div class="write_area">
                <form action="mod_proc.php" method="POST">
                    <div><input type="hidden" name="i_board" value="<?= $i_board ?>"></div>
                    <div class="title"><input type="text" name="title" value="<?= $rs['title'] ?>"></div>
                    <div class="ctnt"><textarea name="ctnt"><?= $rs['ctnt'] ?></textarea></div>
                    <div class="file"><input type="file" name="filename"></div>
                    <div class="btn">
                        <input type="submit" value="글수정" class="sb_btn">
                        <input type="reset" value="초기화" class="rs_btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>