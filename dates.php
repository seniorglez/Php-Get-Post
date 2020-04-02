<?php

$a = "04/05/2020";
$d = date("Y-m-d",strtotime($a));


echo $d . "<br>";
print_r(getdate(time())). "<br>";
print_r(localtime(time())). "<br>";

$date30 = strtotime("+30 day", strtotime($a));


echo date("d/m/Y H:i:s", $date30);