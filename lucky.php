<?php

header("Content-Type:text/html;charset=utf-8");
$url = "http://web.juhe.cn:8080/constellation/getAll?consName=" . urlencode($_GET['consName']) . "&type=today&key=" . $_GET['key'];
$result = file_get_contents($url);
echo $result;
