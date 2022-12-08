<?php 
function ucgen($a){
    $x = 0;
 while ($x<$a){

    
    for ($i=0;$i <= $a ;$i++){
        echo str_repeat('0',$i)."<br>";
    }
    $x+=1;
    break;
    
 }
    

}
echo ucgen(15);



?>