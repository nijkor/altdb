<?php

function print_header($sitename, $pagename) {
    ?>
    <html>
    <head>
        <title><?=$sitename?> &mdash; <?=$pagename?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/o.css">
        <script src="./node_modules/preline/dist/preline.js"></script>
    </head>
    <body>
    
    <?php
}

//Получение строк из БД
function getFromDB($query) {
    global $mysqli;

    $getStrings = mysqli_query($mysqli, $query);
}