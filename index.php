<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exploring Basic PHP Elements</title>
</head>
<body>

    <h1>Exploring Basic PHP Elements</h1>
    <p>Anthony Thomas</p>
    <p>10/25/26</p>

    <?php
    $name = "Anthony Thomas"; //String
    $age = 23; //Integer
    $isStudent = true; //Boolean

    function greet($name, $age) {
        return "Hello, my name is " . $name . " and I am " . $age . " years old.";
    }

    echo "<h2>" . greet($name, $age) . "</h2>";

    echo "<p>JavaScript is primarily used to make web pages interactive in the browser, while PHP runs on the server
    and is primarily used to build dynamic web pages, the contents of which change based on user interaction and input.</p>";

    ?>

</body>
</html>