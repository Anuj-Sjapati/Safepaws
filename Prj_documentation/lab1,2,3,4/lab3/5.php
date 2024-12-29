<!DOCTYPE html>
<html>
<head>
    <title>Sort Indexed Array</title>
</head>
<body>
    <?php
        $numbers = array(4, 2, 8, 6);
        echo "<h2>Sort Indexed Array</h2>";

        sort($numbers);
        echo "Ascending Order: " . implode(", ", $numbers) . "<br>";

        rsort($numbers);
        echo "Descending Order: " . implode(", ", $numbers) . "<br>";
    ?>
</body>
</html>
