<?php

    $fah = $_POST['fah']; 
    $cel = (($fah-32)*5)/9;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
</head>
<body>
    <h1><?php echo $cel . 'ºC' ?></h1>
</body>
</html>