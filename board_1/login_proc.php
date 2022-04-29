<?php
    session_start();

    include_once "db_1.php";

    $id= $_POST['id'];
    $pw= $_POST['pw'];

    $connect= get_connect();
    $query= "SELECT * FROM member WHERE id='$id'";
    $result= mysqli_query($connect, $query);
    mysqli_close($connect);

    if(mysqli_num_rows($result) == 1)
    {
        $row= mysqli_fetch_assoc($result);
        if($row['pw'] == $pw)
        {
            $_SESSION['id']= $id;
            if(isset($_SESSION['id']))
            {
                header("Location: index.php");
            } else
            {
                print "session failed";
            }
        }else
        {
            print "아이디 또는 비밀번호를 확인해주세요.";
        }
    }else
    {
        print "아이디 또는 비밀번호를 확인해주세요.";
    }
?>