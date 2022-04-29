<?php
    session_start();
    session_destroy();      // 실행창에서는 살아있고 다음부터 없앰
    echo $_SESSION['var1'], "<br>";
    echo $_SESSION['var2'], "<br>";
?>
<a href="confirm.php">확인</a>