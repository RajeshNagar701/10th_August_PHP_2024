<?php
date_default_timezone_set('asia/calcutta');


// 1st Jan,1970 seconds starts unix timestamp

echo time() . "<br>";



$hours=time()+ (2 * 60 * 60);
echo date('h:i:s A',$hours)."<br>";

$date=time()+ (2 * 24 * 60 * 60);
echo date('d/m/y',$date)."<br>";
?>