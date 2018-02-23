<?php
try {
    if(file_exists('catalog.xml')){
        $xml = simplexml_load_file('catalog.xml');
        throw new Exception("Failas uzloadintas");
    }
        
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>

