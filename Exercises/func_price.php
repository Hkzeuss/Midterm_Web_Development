<!--Code tính và hiển thị tổng tiền mua hàng dựa trên giá sản phẩm và số lượng mua hàng-->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!--Đặt tiêu đề-->
  <title>Incorporate user defined function into HTML code</title>
</head>
<body>
   <!--Hiển thị thông điệp và kết quả tính toán trên trang web-->
  If you purchase 2 items for $24, the amount of money is <!--Mô tả trường hợp mua hàng-->
  <!--Tính toán tổng tiền mua hàng dựa trên giá sản phẩm 24$ và số lượng 2-->
  <?php
  $amount1 = price(24, 2); // đặt hàm price tính tổng giá trị đơn hàng dựa trên đơn giá và số lượng và kết quả gán vào biến $amount1
  echo "\${$amount1}"; //Hiển thị giá trị của biến $amount1 trên trang web. Hiển thị với ký hiệu $ bằng cú pháp: \${$amount1}
  ?>
  <br>

  If you purchase 5 items for $12, the amount of money is 
  <?php
  $amount2 = price(12, 5);
  echo "\${$amount2}"; 
  ?>

  <?php
  function price($unitprice, $number) { //Định nghĩa hàm price với 2 tham số truyền vào là $unitprice-đơn giá và $number-số lượng
    $shipping = 5; //Gán giá trị =5 tức chi phí vận chuyển
    $totalprice = $unitprice * $number; //Tính toán tổng tiền trc chi phí và gán vào biến $totalprice
    // Shipping fee is $5 if the total price is less than $50
    if ($totalprice < 50) { //Điều kiện kiểm tra nếu số tiền chưa tính chi phí ship dưới 50 thì sẽ được thực thi
      $totalprice += $shipping; //Đủ điều kiện thì tiền ship sẽ được cộng thêm
    }
    return $totalprice; //Trả về giá trị tổng tiền sau khi + cả ci phí ship
  }
  ?>
</body>
</html>
