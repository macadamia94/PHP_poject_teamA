<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>basic_session</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        .wrap {
            width: 1200px;
            height: 700px;
            margin: auto;
        }

        .header {
            height: 100px;
            background-color: #fbcfd0;
        }

        .container {
            width: 1200;
            height: 700px;
            background-color: #ccc;
        }

        .aside {
            width: 300px;
            height: 700px;
            background-color: #d3d5f5;
            float: left;
        }

        .contents {
            width: 900px;
            height: 700px;
            background-color: #fffa99;
            float: left;
        }

        .footer {
            height: 100px;
            background-color: #c8efd4;
            clear: both;
        }
    </style>
</head>
<body>
    <div class="wrap">
        <div class="header">
            <h1>header</h1>
        </div>
        <div class="container">
            <div class="aside"><h1>aside</h1></div>
            <div class="contents"><h1>contents</h1></div>
        </div>
        <div class="footer">
            <h1>footer</h1>
        </div>
    </div>
</body>
</html>