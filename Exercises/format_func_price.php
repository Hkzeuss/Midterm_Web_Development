<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Incorporate user-defined function into HTML code</title>
</head>
<body>
  <?php
  function price($unitprice, $number) {
    $shipping = 5;
    $totalprice = $unitprice * $number;
    
    // Shipping fee is $5 if the total price is less than $50
    if ($totalprice < 50) {
      $totalprice += $shipping;
    }
    
    return $totalprice;
  }

  $amount1 = price(24, 2);
  $amount2 = price(12, 5);
  ?>
  
  <p>If you purchase 2 items for $24, the total amount is $<?php echo $amount1; ?></p>
  <p>If you purchase 5 items for $12, the total amount is $<?php echo $amount2; ?></p>
</body>
</html>
