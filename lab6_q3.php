<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q3</title>
</head>
<body>
    <?php
    function calculateArea($width, $height) {
        return $width * $height;
    }

    $width = 6;
    $height = 12;
    $area = calculateArea($width, $height);

    echo "<b>The area of a rectangle with a width of $width and $height is $area</b>";
    ?>
</body>
</html>