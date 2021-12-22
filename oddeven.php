<?php
//odd and even number

function odd(){
    if(isset($_POST['click'])){
    if($_POST['number']%2==0){
        return 'this is even number';
    
    }else{
        // $number = $_POST['number'];
        return 'this is odd number';
    }
}
}
echo odd();
?>
<form method="post">
<input type="text" name="number" id=""><br>
<input type="submit" name="click" id=""><br>
</form>



