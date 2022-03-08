<!DOCTYPE html>
<html>
<body>
<?php?
    $tims = ["icha","acha","chaca","okta"];
    array_pop($tims);
    foreach($tims as $person){
            echo $person.'<br/>';
    }
?>
</body>
</html>