<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping Exercises</title>
</head>
<body>
    <?php
        $index = 10;
        $a = 0;
        $myHobbies=["Baking", "Cooking", "Reading","Writting diaries"];
        
        echo "<h2> While Statement </h2>";
        while( $index > 0){
            echo "<p>
                Hello World, I am a beginner in programming.
            </p>";
            
            $index = $index - 1;
        }

        echo "<h2> Do ... while Statement </h2>";

        echo "<p> Count 1 to 10 </p>";
        do {
            echo $a; echo "<br>";
            $a = $a + 1;
        } while ($a <= 10);


        echo "<h2> For Statement </h2>";
        
        for ($orders = 0; $orders < 10; $orders++){
            if ($orders <= 1 ) {
                echo "<p>I have completed ". $orders . " order successfully </p>";
            } else {
                echo "<p>I have completed ". $orders . " orders successfully </p>";
            }
        }

        echo "<h2> ForEach Statement </h2>";


        foreach ($myHobbies as $key => $value) {
            echo "<p> I like <b>". $value.  "</b> and I take pleasure do it </p>"; 
        }
    ?>
    
</body>
</html>