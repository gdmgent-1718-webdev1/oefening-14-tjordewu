<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>PHP - Patroon 11 - Tjorven Dewulf</title>
</head>
<body>
    <?php 
        const howMany = 9;
        for($i = 0; $i < howMany; $i++){
            for($j = 0; $j < howMany; $j++) {

                if($i < $j + 5 && $i > 3 - $j) {
                    echo ("<div class='red_circle'></div>");
                }
                else {
                    echo ("<div class='green_circle'></div>");
                } 
            }
            echo ("<br>");
        }
    ?>
</body>
</html>