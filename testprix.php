<?php 

date_default_timezone_set("Europe/Paris");
$time = date('Y-m-d H:i:s', time());
$min = date('Y-m-d H:i:s', strtotime('+5 minutes'));
$date1 = date_create_from_format("Y-m-d H:i:s","2019-02-02 22:25:22");

 echo 'Date darrivée : '. $time . "\n" ;  

 echo 'Date limite de sortie : '.  $min ."\n";

if ($time < $date1 && $time < $min) {
echo "hahaha";
}