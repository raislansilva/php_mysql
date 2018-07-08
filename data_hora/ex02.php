<?php

$dt = new DateTime();

$per  = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");

$dt->add($per);

echo "</br>";

echo $dt->format("d/m/Y H:i:s");



?>