<?php

$path = "/";
$dir = scandir($path);
echo(implode("*",$dir));

?>