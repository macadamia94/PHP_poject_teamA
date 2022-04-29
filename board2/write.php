<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="write.css">
    <title>글쓰기</title>
</head>
<body>
    <form action="write_proc.php" method="post">
        <table>
            <tr class="title">
                <th>글쓰기</th>
            </tr>
            <tr>
                <table class="table2">
                    <tr>
                        <td>작성자</td>
                        <td><input type="text" name="nm" size=30></td>
                    </tr>
                    <tr>
                        <td>제목</td>
                        <td><input type="text" name="title" size=70></td>
                    </tr>
                    <tr>
                        <td>내용</td>
                        <td><textarea name="ctnt" cols=72 rows=10></textarea></td>
                    </tr>
                </table>
                <center>
                    <input type="submit" class="btn" value="글등록">
                    <input type="reset" class="btn" value="초기화">
                </center>
            </tr>
        </table>
    </form>
</body>
</html>