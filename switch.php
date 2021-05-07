<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $x=1;

        switch($x){
            case 1:
                echo "the answer is 1";
            break;
            case "number":
                echo "the answer is number";
            break;
            default:
                echo "there is no answer";    
        }

    ?>
    
</body>
</html>