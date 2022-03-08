<!DOCTYPE html>
<html>
<body>
<?php
    $tims = ["icha", "okta", "chaca", "nisa"];
    array_unshift($tims, "alya", "mirza");
    foreach($tims as $person) {
        echo $person. '<br/>';
    }
?>
<body>
</html>