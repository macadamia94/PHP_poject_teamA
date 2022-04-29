<?php
    include_once "db_1.php";

    $number= $_GET['number'];
    $connect= get_connect();

    session_start();

    $query= "SELECT title, ctnt, date, hit, id FROM board WHERE number=$number";
    $result= mysqli_query($connect, $query);

    $hit= "UPDATE board SET hit=hit+1 WHERE number=$number";
    mysqli_query($connect, $hit);
    mysqli_close($connect);

    if($row= mysqli_fetch_assoc($result))
    {
        $title= $row['title'];
        $id= $row['id'];
        $hit= $row['hit']+1;
        $ctnt= $row['ctnt'];
    }

        if(isset($_SESSION['id']))
    {
        print "<b>". $_SESSION['id'] . "</b> 님 반갑습니다.";
        print "<a href='logout_proc.php'><button class='btn'>로그아웃</button></a>";
        print "<br>";
    }
    else
    {
        print "<a href='login.php'><button class='btn'>로그인</button></a>";
        print "<br>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="read.css">
</head>
<body>
    <table class="read_table">
        <tr>
            <th colspan="4" class="read_title"><?=$title?></th>
        </tr>
        <tr>
            <td class="read_id">작성자</td>
            <td class="read_id2"><?=$id?></td>
            <td class="read_hit">조회수</td>
            <td class="read_hit2"><?=$hit?></td>
        </tr>
        <tr>
            <td colspan="4" class="read_content" valign="top"><?=$ctnt?></td>
        </tr>
    </table>  
    <div class="read_btn">
        <a href="index.php"><button class="read_btn1">목록</button></a>
        <?php
            if(isset($_SESSION['id']) and $_SESSION['id'] == $id)
            {
                print"<a href='mod.php?number=$number'><button class='read_btn1'>수정</button></a>&nbsp;";
                print"<a href='del.php?number=$number&id=$id'><button class='read_btn1'>삭제</button></a>";
            }
        ?>
    </div>    
</body>
</html>