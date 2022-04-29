<?php
    include_once "db_1.php";
    $connect= get_connect();

    $id= $_POST['id'];
    $pw= $_POST['pw'];
    $date= date('Y-m-d H:i:s');

    $query1= "SELECT * FROM member WHERE id='$id'";
    $result1= mysqli_query($connect, $query1);
    $count= mysqli_num_rows($result1);

    if($count)
    {
        print "이미 존재하는 아이디 입니다.";
    }
    else
    {
        $query= "
        INSERT INTO member
        (id, pw, date, permit)
        VALUES
        ('$id', '$pw', '$date', 0)
        ";
        $result= mysqli_query($connect, $query);
        if($result)
        {
            header("Location:login.php");
        }
        else
        {
            header("Location:register.php");
        }
    }
    mysqli_close($connect);
?>