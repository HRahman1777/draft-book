<?php

function get_client_ip()
{
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if (isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

$ip =  get_client_ip();

$timestamp = date("Y-m-d H:i:s");
$file_name = "ip_address_log.txt";
$file = fopen($file_name, 'a');
fwrite($file, $ip . "\t" . $timestamp . "\n");
fclose($file);

$last_hour = time() - 3600; // 3600 seconds = 1 hour
$file = fopen($file_name, 'r');
while ($line = fgets($file)) {
    $parts = explode("\t", $line);
    $ip = $parts[0];
    $timestamp = $parts[1];
    if ($timestamp > $last_hour) {
        echo $ip . "<br>";
    }
}
fclose($file);

?>