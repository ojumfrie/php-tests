<?php

$root_url = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
$root_url .= dirname($_SERVER['PHP_SELF']);

?>