<!-- The switch statement is used to perform different actions based on different conditions.
 -->

 <?php
 function func(){
     if(isset($_POST['click'])){
         $text = $_POST['text'];
         //$items = (string)$text;
         //$str = strval($items);
         //echo $str;
 switch ($text) {
     case 'john':
        return 'this is john portfolio';
         break;
            case 'ranjit':
            return 'this is ranjit portfolio';
            break;
            default:
         return "user not found";
         break;
 }
}
}
echo func();
?>
<form method="post">
<input type="text" name="text" id=""><br>
<input type="submit" name="click" id=""><br>
</form>
<?php
 echo "<br>";
//  while loop in php
$a = 0;
while($a <100){
     $a+=10;
     echo $a;
     echo "<br>";
     echo "<br>";
}
echo "<br>";
$a = 0;

do{

    echo "<br>";
    $a = $a+10;
    echo $a;
}while($a<100);
echo "<br>";



for ($i=0; $i <100 ;) { 
    echo "<br>";
    $i = $i+10;
    echo $i;
    echo "<br>";
}


$num = array(0,10,20,30,40,50,60,70,80,90);
$sum = 1;
foreach($num as $val){
    $sum = $sum+$val;

    
    echo "<br>";
}
print_r($val);

 
 
 
 
 ?>