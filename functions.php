<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercices</title>
</head>
<body>    
    <h1>Exercises about Functions in PHP</h1>
    <p>
        <?php
            function countDown($value){
                if ($value == 0) {
                    return ;
                }
                echo $value;
                countDown($value - 1);
                
            }
            echo "This is a countdown ";
            echo countDown(5);
        ?>
        
        <br>

        <?php
            $arg = 8;

            function fibonnaci($value){
                if ($value==0) {
                    return 0;
                } else if ($value == 1){
                    return 1;
                }

                return fibonnaci($value-1) + fibonnaci($value - 2);
            }

            echo "Fibonnaci of ". $arg. " = ". fibonnaci($arg);
        ?>
    </p>