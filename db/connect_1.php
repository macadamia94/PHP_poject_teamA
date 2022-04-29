<?php
    define("URL", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "506greendg@");
    define("DB_NAME", "board_1")

    $connect= mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME);
    $query= "INSERT INTO board (title, ctnt) VALUES ('test', 'content')";

    mysqli_query($connect, $query);
    mysqli_close($connect);
?>