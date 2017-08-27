<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="myMenu">
            <span>Выберите мотоцикл:</span>
        </div>
        <div class="moto">
            <ul>
                <li><a href="index.php?page=honda"><span>HONDA</span></a></li>
                <li><a href="index.php?page=kawa"><span>KAWASAKI</span></a></li>
                <li><a href="index.php?page=suzuki"><span>SUZUKI</span></a></li>
            </ul>
        </div>

        <?php

        include __DIR__ . '/lib/functions.php';
        
        print_content();

        ?>

    </body>
</html>