<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/gallery_3.css">
    <title>부산 미술관</title>
    <style>
        .gallery_nm2 { padding-top: 15px; }
        .gallery_intro img { padding-bottom: 5px; }
    </style>
</head>
<body>
<?php include_once "../main/header_1.php" ?>
    <div class="container">
        <div class="aside">
            <aside class="left">
                <h4>LOCATION</h4>
                <ul>
                    <li><a href="s_gallery3.php">서울</a></li>
                    <li><a href="d_gallery3.php">대구</a></li>
                    <li><a href="b_gallery3.php">부산</a></li>
                    <li><a href="j_gallery3.php">제주</a></li>
                </ul>
            </aside>
        </div>
        <div class="contents">
            <table class="gallery">
                <tr>
                    <td rowspan="2" class="gallery_pic"><a href="#"><img src="../images/img부산현대2.PNG"></a></td>
                    <td class="gallery_nm2"><a href="#">부산현대미술관</a></td>
                </tr>
                <tr>
                    <td class="gallery_intro"><img src="../images/부산미술관.PNG"></td>
                </tr>
                <tr>
                    <td rowspan="2" class="gallery_pic"><a href="#"><img src="../images/img부산시립2.PNG"></a></td>
                    <td class="gallery_nm2"><a href="#">부산시립미술관</a></td>
                </tr>
                <tr>
                    <td class="gallery_intro"><img src="../images/부산시립미술관.PNG"></td>
                </tr>
                <tr>
                    <td rowspan="2" class="gallery_pic"><a href="#"><img src="../images/img고은사진미술관2.png"></a></td>
                    <td class="gallery_nm2"><a href="#">고은사진미술관</a></td>
                </tr>
                <tr>
                    <td class="gallery_intro"><img src="../images/고은사진미술관.PNG"></td>
                </tr>
            </table>
        </div>
    </div>
<?php include_once "../main/footer.php" ?> 
</body>
</html>