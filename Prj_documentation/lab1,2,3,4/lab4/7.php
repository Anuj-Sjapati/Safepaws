<html>
<body>
<h3>Static Properties and Methods:</h3>
<?php
    class Test { static $prop = "Static Property"; static function method() { echo "Static Method."; } }
    echo Test::$prop . "<br>";
    Test::method();
?>
</body>
</html>
