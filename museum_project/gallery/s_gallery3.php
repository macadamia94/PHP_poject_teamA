<?php
    include_once '../db/db_board.php';

    $loc_id = $_GET['loc_id'];
    $param = [
        "loc_id" => $loc_id,
    ];
    $result = sel_gallery($param);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/gallery_3.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>서울 미술관</title>
    <style>
        .gallery_nm2 {
            padding-top: 25px;
        }

        .gallery_intro img {
            padding-bottom: 25px;
        }
    </style>
</head>

<body>
    <?php include_once "../main/header_1.php" ?>
    <div class="container">
        <div class="aside">
            <aside class="left">
                <h4>LOCATION</h4>
                <ul>
                    <?php foreach ($rs as $item) { ?>
                        <li><a href='../gallery/s_gallery3.php?loc_id=<?= $item['loc_id'] ?>'><?= $item['loc_nm'] ?></a></li>
                    <?php } ?>
                    <!-- <li><a href="s_gallery3.php">서울</a></li>
                    <li><a href="d_gallery3.php">대구</a></li>
                    <li><a href="b_gallery3.php">부산</a></li>
                    <li><a href="j_gallery3.php">제주</a></li> -->
                </ul>
            </aside>
        </div>
        <div class="contents">
            <table class="gallery">
                <?php foreach($result as $list) { ?> 
                    <tr>
                        <td rowspan="2" class="gallery_pic"><a href="#"><img src="../images/<?= $list['gal_img'] ?>"></a></td>
                        <td class="gallery_nm2"><a href="../show/current_show.php?gal_id=<?= $list['gal_id'] ?>"><?= $list['gal_nm'] ?></a></td>
                    </tr>
                    <tr>
                        <td class="gallery_intro"><img src="../images/<?= $list['gal_intro'] ?>"></td>
                    </tr>
                <?php } ?>
                <!-- <tr>
                    <td rowspan="2" class="gallery_pic"><a href="#"><img src="../images/img일민미술관(서울)2.PNG"></a></td>
                    <td class="gallery_nm2"><a href="#">일민미술관</a></td>
                </tr>
                <tr>
                    <td class="gallery_intro"><img src="../images/일민미술관(서울).PNG"></td>
                </tr>
                <tr>
                    <td rowspan="2" class="gallery_pic"><a href="#"><img src="../images/img피크닉(서울)2.png"></a></td>
                    <td class="gallery_nm2"><a href="#">피크닉</a></td>
                </tr>
                <tr>
                    <td class="gallery_intro"><img src="../images/피크닉(서울).PNG"></td>
                </tr> -->
            </table>
        </div>
    </div>
    <?php include_once "../main/footer.php" ?>
</body>

</html>