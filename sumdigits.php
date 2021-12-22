

<?php
//include "oddeven.php";


function sum(){
    if(isset($_POST['click'])){
    $rem = 0;
    $sum =0;
    $num = $_POST['number'];
    for ($i=1; $i <=strlen($num); $i++) { 
        $rem =$num%10;   //rem =1;
        $sum =$sum+$rem;   //sum =1;
        $num =$num/10;    //2
    }
    return $sum; 
}
        
    }
    
echo sum();


?>
<form method="post">
<input type="text" name="number" id=""><br>
<input type="submit" name="click" id=""><br>
</form>

