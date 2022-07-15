<?php
    session_start();

    $nm = "";
    if(isset($_SESSION["login_user"])) {
        $login_user = $_SESSION["login_user"];
        $nm = $login_user["nm"];
    }
?>

<link rel="stylesheet" href="../css/header.css">
    <div id="container">
        <header>
            <?php
                if(isset($_SESSION["login_user"])) {
                    echo "<div><b>${nm}님</b> 환영합니다.</div>";
                }
            ?>
            <div>
                <a href="../board/list.php">글목록</a>
                <?php if(isset($_SESSION["login_user"])) { ?>
                    <a href="../board/write.php">글쓰기</a>
                    <a href="../user/logout.php">로그아웃</a>
                    <a href="../user/profile.php">
                        프로필
                        <?php
                            $session_img = $_SESSION['login_user']['profile_img'];
                            $profile_img = $session_img == null ? "user.jpg" : $_SESSION['login_user']['i_user'] . "/" . $session_img;
                        ?>
                        <div class="circular_img wh40">
                            <img src="<?= "../img/profile/" . $profile_img ?>">
                        </div>
                    </a>

                <?php } else { ?>
                    <a href="../user/login.php">로그인</a>
                <?php } ?>
            </div>
        </header>
    </div>
