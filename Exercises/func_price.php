<!DOCTYPE html>
 <html>
 <head> 
<meta charset="utf-8"> 
<title>Incorporate user defined function into HTML code</title> 
</head> 
<body>
 if you purchase 2 items for $24, amount of money is 
 <?php 
$amount1 = price(24, 2);
 echo "\${$amount1}" 
?> 
<br> 
 if you purchase 5 items for $12, amount of money is 
 <?php
 $amount2 = price(12, 5); 
echo "\${$amount2}";
 ?>
<?php
 function price($unitprice, $number) { 
$shipping = 5;
 $totalprice = $unitprice * $number;
 // Shipping fee is $5 if total price is less than $50
 if ($totalprice <50){ 
    $totalprice += $shipping;
 } 
return $totalprice; }
 ?>
 </body>
 </html>