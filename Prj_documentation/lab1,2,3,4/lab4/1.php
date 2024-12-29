<html>
<body>
<h3>Read File:</h3>
<?php
    $file = 'example.txt';
    echo file_exists($file) ? nl2br(file_get_contents($file)) : "File not found.";
?>
</body>
</html>
