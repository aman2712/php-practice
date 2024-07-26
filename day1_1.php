<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
</head>
<body>
    <h1>PHP File</h1>
    <?php
        echo "<h1>hello world</h1>";

        $var = "hello";
        var_dump($var);

        // constants way 1
        define('INFO', '<br>wow this is constant');
        echo INFO;

        // constants way 2
        const PI = 3.14;
        echo PI;


        echo "<br><br>";

        
    ?>
</body>
</html>