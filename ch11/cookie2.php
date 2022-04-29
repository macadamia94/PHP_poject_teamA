<?php
    setcookie("country", "한국");
    echo "Country : ", $_COOKIE['country'], "<br>";

    $_COOKIE['country'] = "UK";
    echo "Country : ", $_COOKIE['country'], "<br>";

    // unset($_COOKIE['country']);
    // setcookie("country");

    echo "Country : ", $_COOKIE['country'], "<br>";
?>