<<html>
    <head>
        <title>Antra uzduotis</title>
    </head>
    <body>

    </body>
</html>
<!--ax^2 + bx + c = 0;-->


<?php
class DivisionException extends Exception
{
    function message(){
        return "Lygtis turi viena sprendima";
    }
}
class SquareException extends Exception
{
    function message(){
        return "Lygtis sprendiniu neturi";
    }
}

function kiekSaknu($a,$b,$c){
    if($a == 0){
        throw new DivisionException();
    }
    $d = pow($b, 2)-4*$a*$c;
    if($d<0){
        throw new SquareException();
    }
    $x1 = $b*$b+sqrt($d)/(2*$a);
    $x2 = $b*$b-sqrt($d)/(2*$a);
    if($x1 == $x2){
       return 1;
    } else {
        return 2;
    }
}

try {
    $x = kiekSaknu(100, 4, 1);
} catch (DivisionException $ex) {
    $x = 1;
    $myfile = fopen("newfile.txt", "w");
    $data = date("l jS \of F Y h:i:s A");
    $pranesimas = $ex->message();
    fwrite($myfile, "$data $pranesimas");
} catch (SquareException $e){
    $x = 0;
    $myfile = fopen("newfile.txt", "w");
    $data = date("l jS \of F Y h:i:s A");
    $pranesimas1 = $e->message();
    fwrite($myfile, "$data $pranesimas1");
}

echo 'Lygtis turi ' .$x .' sprendiniu';
?>


