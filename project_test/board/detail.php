<?php
    include_once '../db/db_board.php';
    
    session_start();
    if(isset($_SESSION["login_user"])) {
        $login_user = $_SESSION["login_user"];
    }
    $b_id = $_GET["b_id"];
    $param = [
        "b_id" => $b_id,
    ];

    $item = sel_board($param);
    $next_board = sel_next_board($param);
    $prev_board = sel_prev_board($param);
    $count = count_board($param);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$item["b_title"]?></title>
</head>
<body>
    <div><a href="index.php">게시판</a></div>
    <div>
        <?php if($prev_board !== 0) { ?>
            <a href="detail.php?b_id=<?=$prev_board?>"><button>이전</button></a>
        <?php } ?>

        <?php if($next_board !== 0) { ?>
            <a href="detail.php?b_id=<?=$next_board?>"><button>다음</button></a>
        <?php } ?>
    </div>
    <?php if(isset($_SESSION["login_user"]) && $login_user["u_id"] === $item["u_id"]) { ?>
        <div>
            <a href="mod.php?b_id=<?=$b_id?>"><button>수정</button></a>
            <button onclick="isDel();">삭제</button>
        </div>
    <?php } ?>
    <div>제목 : <?=$item["b_title"]?> </div>
    <div>작성자 : <?=$item["u_nick"]?> </div>
    <div>작성날짜 : <?=$item["b_date"]?> </div>
    <div>내용 : <?=$item["b_ctnt"]?> </div>
    <div>조회수 : <?=$item["b_count"]?></div>
    <script>
        function isDel() {
            console.log('isDel worked!');
            if(confirm('정말로 지우시겠습니까?')) {
                location.href = "del.php?b_id=<?=$b_id?>";
            }
        }
    </script>
</body>
</html>