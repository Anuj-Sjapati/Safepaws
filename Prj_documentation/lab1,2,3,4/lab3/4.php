<!DOCTYPE html>
<html>
<head>
    <title>Multidimensional Array</title>
</head>
<body>
    <?php
        $students = array(
            array("John", "A"),
            array("Alice", "B"),
            array("Bob", "A+")
        );
        echo "<h2>Multidimensional Array</h2>";
        foreach ($students as $student) {
            echo "Name: $student[0], Grade: $student[1]<br>";
        }
    ?>
</body>
</html>
