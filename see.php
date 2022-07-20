<?php
$bacaFile = "dataSave.txt";
$read = fopen($bacaFile,"r+");
$obj = fread($read,filesize($bacaFile));
echo($obj);
?>