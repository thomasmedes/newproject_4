<?php

$name = $_GET["cont"];
$got = file_get_contents($name.".txt");

echo($got);
?>