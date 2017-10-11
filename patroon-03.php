<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP - Patroon 03 - Tjorven Dewulf</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php

        const rows = 9;
        const cols = 9;

        for($i = 0; $i < rows; $i++){
            for($j = 0; $j < $i + 1; $j++){
                echo "<div class='red_circle'></div>";
            }
            echo "<br>";
        }

    ?>
    
</body>
</html>