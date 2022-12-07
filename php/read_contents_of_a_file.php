<?php

// fastest way but can be end with memory limit error
$vsa = file_get_contents("./vsa.cpp");
echo $vsa;


// line by line 
$file_handle = fopen("vsa.cpp", "r");
while (!feof($file_handle)) {
   $line = fgets($file_handle);
   echo $line;
}
fclose($file_handle);

?>
