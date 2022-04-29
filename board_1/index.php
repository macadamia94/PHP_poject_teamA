<?php
    include_once "db_1.php";
    $connect= get_connect();
    $query= "SELECT * FROM board ORDER BY number DESC";
    $result= mysqli_query($connect, $query);
    mysqli_close($connect);
    $total = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
    session_start();

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
    <h1>게시판</h1>
    <table>
        <tr>
            <th width="50" >번호</th>
            <th width="350">제목</th>
            <th width="100">작성자</th>
            <th width="200">날짜</th>
            <th width="50">조회수</th>
        </tr>
        <?php
            while($row= mysqli_fetch_assoc($result))
            {
                $number= $row['number'];
                $title= $row['title'];
                $id= $row['id'];
                $date= $row['date'];
                $hit= $row['hit'];

                if($total % 2 == 0)
                {
                    print "<tr class='even'>";
                }
                else
                {
                    print "<tr>";
                }
                print "<td>$total</td>";
                print "<td><a href='read.php?number=$number' target='_blank'>$title</a></td>";
                print "<td>$id</td>";
                print "<td>$date</td>";
                print "<td>$hit</td>";
                print "</tr>";
                $total--;
            }
        ?>
    </table>
    <div class=text>
        <a href="write.php" target="_blank">글쓰기</a>
    </div>
</body>
</html>