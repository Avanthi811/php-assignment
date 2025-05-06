<?php 
$num_1 = (int) readline();
$num_2 = (int) readline();
$quotient = $num_1/ $num_2;
$remaider = $num_1 % $num_2;
if ($num_2 != 0){
    echo "Quotient is : " . $quotient . "\n";
    echo "Remainder is :" .$remaider ."\n";
}else {
    echo "Zero division error\n";
}
?>