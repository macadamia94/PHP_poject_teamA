<?php
    include_once "db/db_board.php";
    session_start();
    
    $page= 1;
    $row_count_list= array(5, 10, 15, 20);  // 보여줄 행의 개수 리스트
    if(isset($_GET["page"])) {
        $page= intval($_GET["page"]);
    }

    $nm= "";
    if(isset($_SESSION["login_user"])) {
        $login_user= $_SESSION["login_user"];
        $nm= $login_user["nm"];
    }

    // $현재 페이지에서 보여줄 행 개수 초기화 하는 곳
    if(isset($_POST['board_list_count'])) {
        $row_count= $_POST['board_list_count'];
    } else {
        $row_count= $row_count_list[0];
    }
    $max_count= 5;  // 한페이지 블럭수
    $param= [
        "row_count" => $row_count,
        "start_idx" => ($page - 1) * $row_count                 // limit 시작위치
    ];
    $s_pageNum= intval(($page-1)/$max_count) * $max_count +1;   // 첫 페이지
    $e_pageNum= $s_pageNum + $max_count - 1;                    // 마지막 페이지
    $paging_count= sel_paging_count($param);                    // 총 페이지 수
    if($e_pageNum > $paging_count) {
        $e_pageNum = $paging_count;
    }
    $list= sel_board_list($param);
    $total= mysqli_num_rows($list);

    // 검색버튼을 눌렀거나, 검색어가 존재한다면 
    if(isset($_POST['search_input_txt']) && $_POST['search_input_txt']!="") {
        // 파라미터 추가
        $param += [
            "search_select" => $_POST["search_select"], // select박스 value값
            "search_input_txt" => $_POST["search_input_txt"] // 검색어
        ];
        // DB조회 전달 후 결과 list를 받아 옴
        $list = search_board($param);
    }

    function select_check($row_count, $count) {
        if($row_count == $count) {
            return "<option value=". $count ."selected>";
        } 
        return "<option value=". $count .">";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="list.css">
    <title>리스트</title>
</head>
<body>
    <div id="container">
        <header>
        <?=isset($_SESSION["login_user"]) ? "<b>" . $nm . "</b>님 환영합니다." : "" ?>
        <?php if(isset($_SESSION["login_user"])) { ?>
            <a href="write.php"><button class='btn'>글쓰기</button></a>
            <a href="logout.php"><button class='btn'>로그아웃</button></a><br>
        <?php } else { ?>
            <a href="login.php"><button class='btn'>로그인</button></a><br>
        <?php } ?>        
        </header>
        <main>
            <h1>리스트</h1>
            <div>
                <form method="post">
                    <select name="board_list_count" onchange="this.form.submit()">
                        <?php
                            for ($i=0; $i < count($row_count_list) ; $i++) { 
                                // <option value="$row_count_list[$i]"> $row_count_list[$i]. "개"</option>
                                echo select_check($row_count, $row_count_list[$i]) . $row_count_list[$i] . "개 </option>";
                            }
                        ?>
                    </select>
                </form>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>글번호</th>
                        <th>제목</th>
                        <th>작성자명</th>
                        <th>등록일시</th>
                        <th>조회수</th>
                    </tr>                    
                </thead>
                <tbody>
                    <?php foreach($list as $item) { 
                        $total % 2 === 0 ? print"<tr class='even'>" : print"<tr>" ?>
                        <td><?= $item["i_board"] ?></td>
                        <td><a href="detail.php?i_board=<?= $item["i_board"] ?>"><?= $item["title"] ?></a></td>
                        <td><?= $item["nm"] ?></td>
                        <td><?= $item["created_at"] ?></td>
                        <td><?= $item["hit"] ?></td>
                    </tr>
                </tbody>
                <?php $total--; } ?>
            </table>
            <div class="paging">
                <?php // if($page != 1 && ($s_pageNum != 1)) { ?>
                <?php if($page != 1) { ?>
                <a href="list.php?page=<?=$page-1?>">이전글</a>
                <?php } ?>
                <?php for($i=$s_pageNum; $i<=$e_pageNum; $i++) { ?>
                    <span class="<?=$i===$page ? "pageSelected" : ""?>">
                        <a href="list.php?page=<?=$i?>"><?=$i?></a></span>
                <?php } ?>
                <?php // if($page != $paging_count && ($e_pageNum != $paging_count)) { ?>
                <?php if($page != $paging_count) { ?>
                <a href="list.php?page=<?=$page+1?>">다음글</a>
                <?php } ?>
            </div>
            <form action="list.php" method="POST">
                <div>
                    <select name="search_select">
                        <option value="search_writer">작성자</option>
                        <option value="search_title">제목</option>
                        <option value="search_ctnt">제목+내용</option>
                    </select>
                    <div>
                        <input type="text" name="search_input_txt">
                        <input type="submit" value="검색">
                    </div>
                </div>
            </form>
        </main>
    </div>
</body>
</html>