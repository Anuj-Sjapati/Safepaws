<!DOCTYPE html>
<html>
<head>
    <title>Insert Data</title>
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

        // Insert multiple records
        $sql = "INSERT INTO Users (name, email) VALUES 
                ('John Doe', 'john@example.com'),
                ('Alice Smith', 'alice@example.com'),
                ('Bob Brown', 'bob@example.com')";

        if ($conn->query($sql) === TRUE) {
            echo "New records inserted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    ?>
</body>
</html>
