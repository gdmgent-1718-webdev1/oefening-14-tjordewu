<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>PHP - Patroon 09 - Tjorven Dewulf</title>
</head>
<body>
<?php

        const rows = 9;
        const cols = 9;

        for($i = 0; $i < rows; $i++){
            for($j = 0; $j < rows; $j++){
                if($j + $i + 1 == 9) {
                    echo "<div class='red_circle'></div>";
                }
                else if($j == $i) {
                    echo "<div class='red_circle'></div>";
                }
                else if(9 - $j > $i) {
                    echo "<div class='green_circle'></div>";
                }
                else {
                    echo "<div class='blue_circle'></div>";
                }
                
            }
            echo "<br>";
        }

    ?>
</body>
</html>