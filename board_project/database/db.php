<?php
define("URL", "localhost");
define("USERNAME", "root");
define("PASSWORD", "506greendg@");     // heidisql (506greendg@)
define("DB_NAME", "board_login"); //heidisql (board_login)

function get_conn()
{
  return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME);
}
