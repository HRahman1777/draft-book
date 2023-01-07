<?php
libxml_use_internal_errors(TRUE);
$objXmlDocument = simplexml_load_file("example.xml");
if ($objXmlDocument === FALSE) {
    echo "There were errors parsing the XML file.\n";
    foreach (libxml_get_errors() as $error) {
        echo $error->message;
    }
    exit;
}
$objJsonDocument = json_encode($objXmlDocument);
$arrOutput = json_decode($objJsonDocument, TRUE);

echo "<pre>";
print_r($arrOutput);
?>
