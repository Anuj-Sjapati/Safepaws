<!DOCTYPE html>
<html>
<head>
    <title>Error Handling</title>
</head>
<body>
    <?php
        function divide($num1, $num2) {
            if ($num2 == 0) {
                throw new Exception("Division by zero.");
            }
            return $num1 / $num2;
        }

        echo "<h2>Error Handling</h2>";
        try {
            echo divide(10, 2) . "<br>";
            echo divide(10, 0);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    ?>
</body>
</html>
