<?php
    include_once "db_1.php";

    $id= $_POST['id'];
    $title= $_POST['title'];
    $ctnt= $_POST['ctnt'];
    $date= date('Y-m-d H:i:s');

    $connect= get_connect();
    $query= "
    INSERT INTO board 
    (id, title, ctnt, date, hit)
    VALUES
    ('$id', '$title', '$ctnt', '$date', '0')
    ";
    $result= mysqli_query($connect, $query);

    if($result)
    {
        header("Locaion: index.php");
    }
    else
    {
        print "게시글 등록에 실패하였습니다.";
    }

    mysqli_close($connect);
?>