<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
        $name = $_POST["name"];
        $age = (int) $_POST["age"];
        echo "<h3>POST variable:</h3>";
        echo "Name: " . $name . "<br>";
        echo "Age: " . $age . "<br>";
    }
?>

<?php
    if (isset($_GET["message"])) {
        $message = $_GET["message"];
        echo "<h3>GET Variable:</h3>";
        echo "Message: " . $message . "<br>";
    }
?>