<?php
    $full= $_GET["full"];
    echo $full;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        function my_addr() {
        var full= '<?=$full?>';
        var my_addr= full+" "+document.getElementById("addr_detail").value;
        opener.document.getElementById("addr").value= my_addr;
        window.close();
        }
    </script>
    <title>주소 검색</title>
</head>
<body>
    <input id="addr_detail" type=text>
    <input type="button" value="확인" onclick="my_addr()">   
</body>
</html>
