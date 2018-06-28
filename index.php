<?php
echo "<h1>Openshift Workshop v6.2</h1>";
echo "<br/>";
echo $_SERVER['SERVER_ADDR'];
echo "<br/>";
$data = getdate();
echo $data[hours], $data[minutes], $data[seconds];
echo "<br/>";
echo "<br/>";
