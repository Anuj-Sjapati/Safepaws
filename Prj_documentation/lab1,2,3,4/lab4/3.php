<html>
<body>
<h3>Rename File:</h3>
<?php
    echo rename('example.txt', 'renamed.txt') ? "File renamed." : "Rename failed.";
?>
</body>
</html>
