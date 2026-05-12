<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$liczba = 0;

if ($liczba <= -1) {
    echo "Liczba ujemna";
} elseif ($liczba >= 1) {
    echo "liczba dodatnia";
} elseif ($liczba == 0) {
    echo "liczba jest równa zero";
}

?>
</body>
</html>