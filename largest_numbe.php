<?php
 $num1 = 4; 
 $num2 = 5;  
 $num3 = 6;

 if($num1 > $num2 && $num1 > $num3){
    echo "Lergest Number is = ".$num1;
 }
 else if($num2>$num1 && $num2>$num3){
    echo "Lergest Number is = ".$num2;
 }
 else if($num3>$num1 && $num3>$num2){
    echo "Lergest Number is = ".$num3;
 }
 else {
    echo "All Number is equal";
 }

 ?>