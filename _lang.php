<?php
$path = '.';

$files = array_diff(scandir($path), array('.', '..'));
print_r($files);
?>
