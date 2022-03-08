<!DOCTYPE html>
<html>
<body>
<?php
    $tims = ["icha", "nisa", "caca", "okta"];
    array_shift($tims);
    foreach($tims as $person) {
        echo $person. '<br/>';
    }
?>
<body>
</html>