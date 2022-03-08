<!DOCTYPE html>
<html>
<body>
<?php
    $tims = ["anisa", "oktavia", "icha", "chaca"];
    array_unshift($tims, "fathan", "dzulfan");
    foreach($tims as $person) {
        echo $person. '<br/>';
    }
?>
<body>
</html>