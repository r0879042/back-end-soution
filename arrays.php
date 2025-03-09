<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercices</title>
</head>
<body>    
    <h1> Exercises about Arrays in PHP</h1>
    <?php
        $myHobbies=["Baking", "Cooking", "Reading","Writting diaries"];
        $me["firstname"] = "Umutesi";
        $me['lastname'] = "Sonia";

        #var_dump($myHobbies); // To see the raw content
        echo "My hobbies's list: ";
        print_r($myHobbies); // To see the content but looking pretty

        echo "<br>";
        echo "How many hobbies are in there? "; 
        print(count($myHobbies)); // Counts numbers of elements in a given array

        echo "<br>";
        echo "How many names do I have? "; 
        print(count($me));

        echo "<br>";
    ?>    

    <p>
        Shuffle the list of hobbies ... 
        <?php  
            shuffle($myHobbies);
            print_r($myHobbies); 
        ?>
    </p>

    <p> THE END</p>
</body>
</html>
