<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$prawo = 18;

if ($prawo <= 17) {
    echo "Masz $prawo lat i nie posiadasz prawa for voting";
} 
elseif ($prawo >= 18){
    echo "Masz $prawo lat i posiadasz prawa for voting";
}
?>
</body>
</html>