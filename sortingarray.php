<?php

function arraysorn(){
    $array=array(2,4,8,5,1,7,6,9,10,3);
    //(2,4,5,1,7,6);
    //(2,4,1,5,7,6);
    //

    echo "unshorting array";
    echo "<pre>";
    print_r($array);
    
    
    for ($i=0; $i <count($array) ; $i++) { 
        for ($j=0; $j <count($array)-1 ; $j++) { 
             if($array[$j] > $array[$j+1]){
                //echo $array[$j];
                //echo "<br>";
                 $temp = $array[$j+1];
                $array[$j+1]=$array[$j];
                $array[$j]=$temp;
                //echo $array[$j];
                //echo "<pre>";
                 
                
              }  
              
        }
    }
    
    echo "<pre>";
    print_r($array);
    
    echo "<br>";
    echo "<br>";


}

arraysorn();


?>





