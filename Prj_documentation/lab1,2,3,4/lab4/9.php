<html>
<body>
<h3>Re-throwing Exception:</h3>
<?php
    function test() {
        try { throw new Exception("Initial Exception."); }
        catch (Exception $e) { echo $e->getMessage() . "<br>"; throw $e; }
    }
    try { test(); } catch (Exception $e) { echo "Caught Again: " . $e->getMessage(); }
?>
</body>
</html>
