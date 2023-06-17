<?php 

// add tupi-ola A (Â) before plus-minus
$sample = "921±2 kg";
$index = strpos($sample,"±");
echo substr_replace($sample, "Â", $index, 0);


?>
