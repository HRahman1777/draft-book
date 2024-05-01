<?php

$host = "$_SERVER[HTTP_HOST]";
$req_url = "$_SERVER[REQUEST_URI]";
$actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$actual_link_file = basename($req_url);
$local_base_dir = dirname(__FILE__);

?>
