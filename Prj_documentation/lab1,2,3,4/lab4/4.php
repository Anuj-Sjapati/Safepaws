<html>
<body>
<h3>Delete File:</h3>
<?php
    echo unlink('renamed.txt') ? "File deleted." : "Delete failed.";
?>
</body>
</html>
