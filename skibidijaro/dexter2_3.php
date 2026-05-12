<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$color = 3;
switch ($color) {
    case 1:
        echo "Czerwony";
        break;
    case 2:
        echo "Zielony";
        break;
    case 3:
        echo "Niebieski";
        break;
    default:
        echo "Inny kolor";
        break;
}
?>
</body>
</html>