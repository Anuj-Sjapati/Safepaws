<html>
<body>
<h3>Constructor & Destructor:</h3>
<?php
    class Test {
        public function __construct() { echo "Constructor called.<br>"; }
        public function __destruct() { echo "Destructor called."; }
    }
    $obj = new Test();
?>
</body>
</html>
