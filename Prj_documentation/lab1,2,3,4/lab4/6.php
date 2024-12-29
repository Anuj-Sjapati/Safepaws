<html>
<body>
<h3>Method Overriding:</h3>
<?php
    class ParentClass { function show() { echo "Parent Method.<br>"; } }
    class ChildClass extends ParentClass { function show() { echo "Child Method.<br>"; } }
    (new ChildClass())->show();
?>
</body>
</html>
