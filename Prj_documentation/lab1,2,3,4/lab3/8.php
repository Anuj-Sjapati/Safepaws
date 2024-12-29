<!DOCTYPE html>
<html>
<head>
    <title>Foreach Loop</title>
</head>
<body>
    <?php
        $colors = array("Red", "Green", "Blue");
        echo "<h2>Foreach Loop</h2>";
        foreach ($colors as $color) {
            echo "$color<br>";
        }
    ?>
</body>
</html>
