<?php
    include_once "../db/db_board.php";
    
    $s_id = $_GET["s_id"];
    $param = [
        "s_id" => $s_id
    ];
    $result = sel_detail($param);
    $list = sel_show_list($param);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/show_detail.css">
    <title>show_detail</title>
</head>
<body>
    <?php include_once "../header_1.php"; ?>
    <div id="container">
        <div class="gal_nm"><?=$result["gal_nm"]?></div> <!-- 미술관 번호로 이름 가져오기 -->
        <table>
            <!-- html작성 후 db 값 가져오기 -->
            <tr>
                <th rowspan="2" colspan="6"><?=$result["s_nm"]?></th>
            </tr>
            <tr>
            </tr>
            <tr>
                <th>전시시작일</th>
                <td class="date" colspan="2"><?=$result["s_s_date"]?></td>
                <th>전시종료일</th>
                <td class="date" colspan="3"><?=$result["s_e_date"]?></td>
            </tr>
            <tr>
                <th>전시개요</th>
                <td colspan="4"><?=nl2br($result["s_ctnt_img"])?></td>
            </tr>
        </table>
        <?php foreach($list as $item) { ?> 
        <div class="img"><img src="../img/<?=$item['pic_img']?>"></div>
        <?php } ?>
    </div>
    <?php include_once "../footer.php"; ?>
</body>
</html>