
<?php
//php variables scopes 
//local
//global
//static

$var = 10;    //global scope
$var2 = 20;
function scp(){  

  
   
    global $var,$var2;
   
    $GLOBALS['var'] = $GLOBALS['var'] - $GLOBALS['var2'];
    echo  $var = $var+$var2;
    
    echo "<br>";
    echo "<br>";
    echo $name = 345;// local scope

}
scp();


echo "<br>";
echo "<br>";
echo "<br>";
///static functions in php


function myTest(){
    static $roolll = 1;
   echo  $roolll = $roolll+1;

}
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();



//difference beetween echo and print


// $name = 45;
// $rollno = 123;
// $check = 'this is cheking purpose';
// echo "<br><br>".$name."<br><br>".$rollno;

// print($name.$rollno.$check);




  

?>
