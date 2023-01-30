<?php
function digits_sum($number){
   $number= strval($number);
    $sum = 0;
   for ($i = 0; $i < strlen($number); $i++){
      $sum += $number[$i];
   }
   echo "The sum of the digits of ".$number." is ".$sum;
}

digits_sum(234234143)
?>