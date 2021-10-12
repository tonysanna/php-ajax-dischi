<?php
    require __DIR__.'/database.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Dischi</title>
</head>
<body>
    <header>
        <div id="logo">
            <h1>PHP DISCHI</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <?php
                foreach ($db as $album) {
                    echo '<div class="album-b">';
                    echo '<img scr="'. $album['poster'] . '">';
                    echo '<h2>' . $album['title'] . '</h2>';
                    echo '<div class="box-inf">'. 
                            '<span>' . $album['author'] . '</span>'.
                            '<span>' . $album['year'] . '</span>'.
                         '</div>';
                    echo '</div>';         
                }
            ?>
        </div>
    </main>
    
</body>
</html>