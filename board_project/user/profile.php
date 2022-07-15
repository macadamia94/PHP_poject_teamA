<?php
    session_start();
    include_once '../database/db_user.php';
    include_once '../fn/date.php';

    $login_user = $_SESSION['login_user'];
    $param = [ "i_user" => $login_user['i_user'] ];
    $rs = selProfile($param);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/container.css">
    <link rel="stylesheet" href="../css/common.css">
    <title>프로필</title>
</head>

<body>
    <div id="container">
        <?php include('../header.php'); ?>
        <main>
            <div style="text-align: center; margin-bottom: 20px">
                <h3>프로필 이미지 디스플레이</h3>
                <form action="profile_proc.php" method="POST" enctype="multipart/form-data">
                    <div><input type="file" name="img" accept="image/*"></div>
                    <div><input type="submit" value="업로드" style="padding: 5px"></div>
                </form>
            </div>
            <table>
                <thead>
                    <tr>
                        <th width=10%>글번호</th>
                        <th width=35%>제목</th>
                        <th width=15%>작성자</th>
                        <th width=30%>작성일</th>
                        <th width=10%>조회수</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rs as $row) {
                        $i_board = $row["i_board"];
                        $profile_img = $row["profile_img"] == null ? "user.jpg" : $row["i_user"] . "/" . $row["profile_img"];
                    ?>
                        <tr>
                            <td width=10%><?= $i_board ?></td>
                            <td width=35%><a href="../board/detail.php?i_board=<?= $i_board ?>"><?= $row["title"] ?></td>
                            <td width=15%>
                                <?= $row["nm"] ?>
                                <div class="circular_img wh40">
                                    <img src="../img/profile/<?= $profile_img ?>">
                                </div>
                            </td>
                            <td width=30%><?= dateFormat($row["created_at"]) ?></td>
                            <td width=10%><?= $row['view_cnt'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </main>
    </div>
</body>

</html>
