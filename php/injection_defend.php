<?php 

$str = "Hello World!";
echo trim($str);



$str = "This is some <b>bold</b> text.";
echo htmlspecialchars($str);

/*
res: This is some <b>bold</b> text.
Converting and into entities are often used to prevent browsers from using it as an HTML element. 
This can be especially useful to prevent code from running when users have access to display input on your homepage.
*/


$str = addslashes("What does 'yolo mean?");
echo($str); 
// What does \'yolo mean?
