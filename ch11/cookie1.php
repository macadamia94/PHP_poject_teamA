<?php
    setcookie("country", "Korea");
    if(isset($_COOKIE['country']))
    {
        echo "Country : ", $_COOKIE['country'], "<br>";
    }
?>
<a href="cookie2.php">Next Page</a>