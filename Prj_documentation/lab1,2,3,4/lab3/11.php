<!DOCTYPE html>
<html>
<head>
    <title>Connect to MySQL</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully to MySQL server.";
    ?>
</body>
</html>
