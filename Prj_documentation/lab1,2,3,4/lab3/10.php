<!DOCTYPE html>
<html>
<head>
    <title>Session Handling</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION["username"] = "JohnDoe";
        echo "<h2>Session Handling</h2>";
        echo "Session variable is set: " . $_SESSION["username"] . "<br>";

        session_unset();
        session_destroy();
        echo "Session destroyed.";
    ?>
</body>
</html>
