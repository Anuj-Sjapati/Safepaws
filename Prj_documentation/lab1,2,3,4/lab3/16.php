<!DOCTYPE html>
<html>
<head>
    <title>Cookies in PHP</title>
</head>
<body>
    <?php
        // Set a cookie
        setcookie("username", "JohnDoe", time() + (86400 * 30), "/"); // 86400 = 1 day

        echo "<h2>Cookies Example</h2>";
        if (isset($_COOKIE["username"])) {
            echo "Cookie 'username' is set!<br>";
            echo "Value: " . $_COOKIE["username"];
        } else {
            echo "Cookie 'username' is not set.";
        }
    ?>
</body>
</html>
