<?php
$json1 = '["H\u00e0 N\u1ed9i","H\u1ed3 Ch\u00ed Minh","\u0110\u00e0 N\u1eb5ng"]';
$json2 = '{"name":"Nguy\u1ec5n Minh Qu\u00e2n","age":"18","location":"H\u1ea3i D\u01b0\u01a1ng"}';

$convert1 = json_decode($json1);
$convert2 = json_decode($json2);

echo "<pre>";
print_r($convert1);
echo "</pre>";

echo "<pre>";
print_r($convert2);
echo "</pre>";
?>