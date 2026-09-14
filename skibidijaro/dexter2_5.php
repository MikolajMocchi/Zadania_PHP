<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$nickname = strtoupper("Mocchi") ;
if (empty($nickname)){
    $nickname = "guest";
    echo $nickname;
}
else {
    echo $nickname;
};
?>
</body>
</html>
