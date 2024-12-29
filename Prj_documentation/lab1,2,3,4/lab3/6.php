<!DOCTYPE html>
<html>
<head>
    <title>Sort Associative Array by Value</title>
</head>
<body>
    <?php
        $ages = array("John" => 25, "Alice" => 30, "Bob" => 35);
        echo "<h2>Sort Associative Array by Value</h2>";

        asort($ages);
        echo "Ascending by Value:<br>";
        foreach ($ages as $key => $val) {
            echo "$key => $val<br>";
        }

        arsort($ages);
        echo "<br>Descending by Value:<br>";
        foreach ($ages as $key => $val) {
            echo "$key => $val<br>";
        }
    ?>
</body>
</html>
