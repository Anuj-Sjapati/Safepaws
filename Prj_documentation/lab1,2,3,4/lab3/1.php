<!DOCTYPE html>
<html>
<head>
    <title>String Info</title>
</head>
<body>
    <?php
        $input = "Hello, this is an example string.";
        $length = strlen($input);
        $wordCount = str_word_count($input);

        echo "<h2>String Information</h2>";
        echo "Input String: $input<br>";
        echo "Length of the string: $length<br>";
        echo "Number of words: $wordCount<br>";
    ?>
</body>
</html>
