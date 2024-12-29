<html>
<body>
<h3>Multiple Exceptions:</h3>
<?php
    try {
        throw new Exception("First Exception.<br>");
    } catch (Exception $e) {
        echo $e->getMessage();
        try { throw new Exception("Second Exception."); } catch (Exception $e) { echo $e->getMessage(); }
    }
?>
</body>
</html>
