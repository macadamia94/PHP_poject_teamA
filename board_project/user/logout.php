<?php
    session_start();
    session_destroy();

    header("Location: ../board/list.php");