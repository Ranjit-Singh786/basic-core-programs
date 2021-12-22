

<html>  
<head>  
<title>Factorial Program using loop in PHP</title>  
</head>  
<body>  
<form method="post">  
    Enter the Number:<br>  
    <input type="number" name="number" id="number">  
    <input type="submit" name="submit" value="Submit" />  
</form>  
<?php 
function fact(){ 
    if($_POST){  
        $fact = 1;  
        //getting value from input text box 'number'  
        $number = $_POST['number'];  
        echo "Factorial of $number:<br><br>";  
        //start loop  
        for ($i = 1; $i <= $number; $i++){         
            $fact = $fact * $i;
            //echo $fact;
            }  
            echo $fact . "<br>";  
    }  
}
fact();



//this is normat function only choose the number and get the value
function facto($facto = 1,$nm = 3){
    for ($i=$nm; $i >1 ; $i--) { 
        $facto = $facto*$i;
    }
    //echo $facto;
}
facto();





function fac($n){
    if($n<1){
        return 1;

    }else{
        return $n *fac($n-1);  //4*3*2*1;
    }
}
echo fac(4);
?>  




</body>  
</html>