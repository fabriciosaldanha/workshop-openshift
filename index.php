<?php
echo "<h1>Openshift Workshop v6.2</h1> ";
echo $_SERVER['SERVER_ADDR'];
$data = getdate();
echo $data[hours], $data[minutes], $data[seconds];
