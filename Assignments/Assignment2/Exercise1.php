<?php

$arg0 = [1,2,3,4];
$arg1 = [1,2,3,4,5];

function echoNestedLists($arg0, $arg1) {
    echo "<ul>";
    foreach ($arg0 as $val0) {
        echo "<li>" . $val0 . "<ul>";
        foreach ($arg1 as $val1) {
            echo "<li>" .
                $val1 .
                "</li>";
        }
        echo "</ul></li>";
    }
    echo "</ul>";
}


?>

<!DOCTYPE html>
<html lang="en">

<body>

<?php echoNestedLists($arg0, $arg1); ?>

</body>

</html>