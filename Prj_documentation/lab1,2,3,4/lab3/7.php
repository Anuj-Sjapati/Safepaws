<!DOCTYPE html>
<html>
<head>
    <title>Sort Associative Array by Key</title>
</head>
<body>
    <?php
        $ages = array("John" => 25, "Alice" => 30, "Bob" => 35);
        echo "<h2>Sort Associative Array by Key</h2>";

        ksort($ages);
        echo "Ascending by Key:<br>";
        foreach ($ages as $key => $val) {
            echo "$key => $val<br>";
        }

        krsort($ages);
        echo "<br>Descending by Key:<br>";
        foreach ($ages as $key => $val) {
            echo "$key => $val<br>";
        }
    ?>
</body>
</html>
