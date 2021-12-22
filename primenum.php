<?php


  //get the prime number using user input and get the value of prime number
if(isset($_POST['click'])){

    function primenum(){

        $checknum = $_POST['number'];

    
        $flag = 0;
        
        for ($i=2; $i <$checknum; $i++) { 
            if($checknum%$i==0){
                $flag = 1;
                break;
            }
        }
        if($flag ==1){
            return  'this is not a prime number';
        }else{
            return 'this is prime number';
        }
    
    
    }
    
    echo primenum();


}





?>

<form method="post">
<input type="text" name="number" id=""><br>
<input type="submit" name="click" id=""><br>
</form>