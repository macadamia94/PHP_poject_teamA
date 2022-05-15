<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/gallery.css">
    <title>Gallery</title>
</head>
<body>
<div class="wrap">
    <?php include_once "header_1.php" ?>
        <div class="container">
            <div class="aside">
                <aside class="left">
                    <h4>LOCATION</h4>
                    <ul>
                        <li><a target="iframe1" href="s_gallery.php">서울</a></li>
                        <li><a target="iframe1" href="d_gallery.php">대구</a></li>
                        <li><a target="iframe1" href="b_gallery.php">부산</a></li>
                        <li><a target="iframe1" href="j_gallery.php">제주</a></li>
                        <li><a target="iframe1" href="s_gallery2.php">서울2</a></li>
                        <li><a target="iframe1" href="d_gallery2.php">대구2</a></li>
                        <li><a target="iframe1" href="b_gallery2.php">부산2</a></li>
                        <li><a target="iframe1" href="j_gallery2.php">제주2</a></li>
                    </ul>
                </aside>
            </div>
            <div class="contents">
                <section id="main">
                    <article>
                        <iframe name="iframe1" src="d_gallery.php" frameborder="0"></iframe>
                    </article>
                </section>
            </div>
        </div>
    <?php include_once "footer.php" ?> 
</div>
</body>
</html>