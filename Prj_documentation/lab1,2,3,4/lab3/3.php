<!DOCTYPE html>
<html>
<head>
    <title>Associative Array</title>
</head>
<body>
    <?php
        $ages = array("John" => 25, "Alice" => 30, "Bob" => 35);
        echo "<h2>Associative Array</h2>";
        foreach ($ages as $name => $age) {
            echo "$name is $age years old.<br>";
        }
    ?>
</body>
</html>
