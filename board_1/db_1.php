<?php
    define("URL", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "506greendg@");
    define("DB_NAME", "board_1");

    function get_connect()
    {
        return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME);
    }
   