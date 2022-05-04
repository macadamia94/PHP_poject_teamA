<?php
include_once "db/db_board.php";
// $list= sel_board_list();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/board.css">
    <title>Board</title>
</head>
<body>
    <div class="top" ><br><h1>게시판</h1><hr></div>
    <button class="no" onclick="location.href='write.php'">글쓰기</button>
    <table class="middle">
        <thead>
            <tr align="center">
                <th width=70>Post ID</th>
                <th width=300>제목</th>
                <th width=120>작성자</th>
                <th width=120>작성일</th>
                <th width=70>조회수</th>
                <th width=70>좋아요</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list as $item) { ?>
            <tr align="center">
                <td><?= $item["i_board"] ?></td>
                <td><?= $item["title"] ?></td>
                <td><?= $item["nm"] ?></td>
                <td><?= $item["created_at"] ?></td>
                <td><?= $item["hit"] ?></td>
                <td><?= $item["liked"] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>