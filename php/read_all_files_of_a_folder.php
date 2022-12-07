<?php

$path = "img/";
$files = scandir($path);
foreach ($files as &$value) {
   //echo $value . '<br>';
    if(strlen($value) >= 3){
        echo "<img src='http://localhost/img/". $value . "' alt='' width='500' height='600'><br><br><br>";
    }
    
}

?>


/*
// FOR jpeg file


<?php
$path = './';
$server_pre_path = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/';
$files = scandir($path);
foreach ($files as $value) {
    if(substr($value, -4) == 'jpeg'){
        echo "<h3>".$value."</h3>";
        echo "<img src='" . $server_pre_path . $value . "' alt='' width='600' height='600'><br><br><br><br>";
    }
}
?>

*/
