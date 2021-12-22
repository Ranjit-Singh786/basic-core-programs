<?php
function armstrong(){
   if(isset($_POST['click'])){
    $num = $_POST['number'];
    //armstrong means each digit cubes then add three values;
    //3*3*3 = 27
    //7*7*7 = 343;343+27+0 =370 its means this is armstrong number
    
    $total = 0;
    
    $x = $num;
    while($x!=0){
        $rem = $x%10;
        $total = $total+$rem*$rem*$rem;
        $x = $x/10;
    }
    if($num == $total){
        echo 'this is armstrong num';
    
    }else{
        echo 'this is not armstrong number';
    }


}

   }
   armstrong();





   //this is the simple way to find the armstrong number using php language
    
// $num =153;
// $str = (string)$num;
//  $n =0;

// for ($i=0; $i <strlen($num) ; $i++) { 
//        $n = $n+$str[$i]*$str[$i]*$str[$i];
// }
// if($num == $n){
//     echo 'arm strong num';

// }else{
//     echo 'not arm strong num';
// }





?>


<form method="post">
<input type="text" name="number" id=""><br>
<input type="submit" name="click" id=""><br>
</form>