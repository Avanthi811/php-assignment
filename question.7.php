<?php 
$num_1 = (int) readline();
$num_2 = (int) readline();
$quotient = $num_1/ $num_2;
$remaider = $num_1 % $num_2;
try{
    echo "Quotient is : " . $quotient . "\n";
    echo "Remainder is :" .$remaider ."\n";
}catch (Exception $e){
    echo "Zero division error\n";
}
?>