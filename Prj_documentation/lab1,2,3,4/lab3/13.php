<!DOCTYPE html>
<html>
<head>
    <title>Create Table</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "myDatabase";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Create table
        $sql = "CREATE TABLE Users (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(30) NOT NULL,
            email VARCHAR(50) NOT NULL
        )";

        if ($conn->query($sql) === TRUE) {
            echo "Table 'Users' created successfully.";
        } else {
            echo "Error creating table: " . $conn->error;
        }

        $conn->close();
    ?>
</body>
</html>
