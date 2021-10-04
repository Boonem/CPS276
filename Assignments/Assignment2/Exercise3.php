<?php

$rowNum = 15;
$cellNum = 5;

function echoLabelledTable($rowNum, $cellNum) {
    echo "<table border=\"1\">";
    for ($i = 1; $i <= $rowNum; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $cellNum; $j++) {
            echo "<td>Row " .
                $i .
                " Cell " .
                $j .
                "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}


?>

<!DOCTYPE html>
<html lang="en">

<body>

<?php echoLabelledTable($rowNum, $cellNum); ?>

</body>

</html>