<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    div{
        padding: 20px;
    }
    #header{
        background-color: yellow;
    }
    </style>
</head>
<body>
   <div id = "header"></div>
   <div id = "content"></div>
   <?php
    require_once "./MVC/views/pages/".$data['page'].".php";
   ?>
</body>
</html>