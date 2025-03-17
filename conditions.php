<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercices</title>
</head>
<body>    
    <h1>Exercises about Conditions in PHP</h1>
    <?php
        $myName = "Umutesi Sonia";
        $myWork = "I am a student and a baker.";

        echo $myName . ", ". $myWork;
        echo "<br>"."The length of my name is ".strlen($myName);
    ?>
    <?php 

        echo "<h1> IF conditions </h1>";
        
        if (strlen($myName) > strlen($myWork)) {
            echo "<p>". "I am displaying my work: " . $myWork. "</p>";
        } else {
            echo "<p>". "I am displaying my name : " .$myName . "</p>";
        }


        echo "<h1> Shorthand If conditions </h1>";

        echo strlen($myName) === 13 ? "<p> My name has 12 letters </p>" : "<p> My has more than 12 letters </p>";


        echo "<h1> Switch conditions </h1>";

        $favoriteColor = "Black and white";

        switch ($favoriteColor) {
            case 'Black':
                echo "Must be black and White";
                break;
            case 'White':
                echo "Must add black in it";
            default:
                echo "That's my favorite color";
                break;
        }
    ?>
    <p> THE END</p>
</body>
</html>
