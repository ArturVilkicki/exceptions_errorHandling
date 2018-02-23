<<html>
    <head>
        <title>Bonus uzduotis</title>
    </head>
    <body>

    </body>
</html>


<?php
try{
    $xml = simplexml_load_file('catalogg.xml');
    if(!file_exists($xml)){
       $myfile = fopen("newfile.txt", "w");
       $data = date("l jS \of F Y h:i:s A");
       
    }
        
    
} catch (Exception $ex) {
    echo $ex->getMessage();
}


?>


