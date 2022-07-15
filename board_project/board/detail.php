<?php
session_start();
include_once '../database/db_board.php';
include_once '../fn/date.php';
include_once '../fn/review.php';

if (isset($_SESSION["login_user"])) {
  $login_user = $_SESSION["login_user"];
}

$i_board = $_GET["i_board"];
$i_user = $login_user['i_user'];

$param = [
  "i_board" => $i_board,
];

$view_rs = view_board($param);
$rs = sel_board($param);
$reply_rs = sel_reply($param);
$next_board = sel_next_board($param);
$prev_board = sel_prev_board($param);
$avg_rv = sel_reply2($param);

if ($item = mysqli_fetch_assoc($reply_rs)) {
  $i_re = $item['i_re'];
}
if ($item = mysqli_fetch_assoc($avg_rv)) {
  $rv_cnt = $item['rv_cnt'];
}
$cnt = mysqli_num_rows($reply_rs);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/detail.css">
  <link rel="stylesheet" href="../css/container.css">
  <title><?= $rs['title'] ?></title>
</head>

<body>
  <div id="container">
    <?php include('../header.php') ?>
    <div class="cls">
      <div class="head">
        <!-- <div class="list_btn"><a href="list.php">글목록</a></div> -->
        <div class="list_btn">
          <?php if ($prev_board != 0) { ?>
            <a href="detail.php?i_board=<?= $prev_board ?>"><button>이전글</button></a>
          <?php } ?>
          <?php if ($next_board != 0) { ?>
            <a href="detail.php?i_board=<?= $next_board ?>"><button>다음글</button></a>
          <?php } ?>
        </div>
        <div class="btn">
          <?php if (isset($_SESSION["login_user"]) && $rs["i_user"] == $login_user["i_user"]) { ?>
            <a href="mod.php?i_board=<?= $i_board ?>"><button>수정</button></a>
            <button onclick="isDel();">삭제</button>
          <?php } ?>
        </div>
      </div>
      <div class="main">
        <div class="title"><?= $rs["title"] ?></div>
        <div class="sub">
          <span class="nm"><?= $rs["nm"] ?></span>
          <span class="view_cnt">조회 : <?= $rs['view_cnt'] ?></span>
          <span class="date">작성일 : <?= dateFormat($rs["created_at"]) ?></span>
        </div>
        <div class="contents">
          <div class="ctnt"><?= $rs["ctnt"] ?></div>
          <?php if ($rs["filename"]) { ?>
            <div class="detail_img"><img src="../images/<?= $rs["filename"] ?>"></a></div>
          <?php } ?>
        </div>
      </div>
      <div class="reply">
        <h3>댓글
          <span style="font-size: medium;">[<?= $cnt ?>]</span>
          <span><?= avg_rv($rv_cnt, $cnt) ?></span>
        </h3>
        <div class="sel_reply">
          <?php foreach ($reply_rs as $row) { ?>
            <div><?= rv($row['rv']); ?></div>
            <div class="d1"><?= $row["nm"] ?></div>
            <div class="d3"><?= dateFormat($row["updated_at"]) ?></div>
            <div class="d2"><?= $row["ctnt"] ?></div>
            <div>
              <?php if (isset($_SESSION["login_user"]) && $row["i_user"] == $login_user["i_user"]) { ?>
                <button onclick="reDel();">삭제</button>
              <?php } ?>
            </div>
            <br>
          <?php } ?>
        </div>
        <div class="re_area">
          <form action="re_proc.php" method="POST">
            <div><input type="hidden" name="i_board" value="<?= $i_board ?>"></div>
            <div>
              <label><input type="radio" name="rv" value="1">😠</label>
              <label><input type="radio" name="rv" value="2">😓</label>
              <label><input type="radio" name="rv" value="3" checked>😑</label>
              <label><input type="radio" name="rv" value="4">🙂</label>
              <label><input type="radio" name="rv" value="5">😍</label>
            </div>
            <div><textarea name="ctnt"></textarea></div>
            <div><input type="submit" value="댓글등록"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script>
    function isDel() {
      if (confirm('삭제하시겠습니까?')) {
        location.href = "del.php?i_board=<?= $i_board ?>";
      }
    }

    function reDel() {
      if (confirm('삭제하시겠습니까?')) {
        location.href = "re_del.php?i_board=<?= $i_board ?>&i_re=<?= $i_re ?>";
      }
    }
  </script>
</body>

</html>