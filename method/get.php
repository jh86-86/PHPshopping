<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    echo $GET['name'];

?>

    <form method="GET">
        <input type="hidden" name="name" value="daniel">
        <button type="submit">Press me</button>
    </form>



</body>
</html>