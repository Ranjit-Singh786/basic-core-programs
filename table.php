<?php

if(isset($_POST['click'])){


function table(){
    $table = $_POST['number'];
    for ($i=1; $i <=10 ; $i++) { 
        echo $table*$i;
        echo "<br>";
    }
}
table();
}



?>


<form method="post">
<input type="text" name="number" id=""><br>
<input type="submit" name="click" id=""><br>
</form>