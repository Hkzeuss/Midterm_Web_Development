<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = $_POST;
    $file = fopen('class_members.txt', 'a');

    if ($file) {
        fwrite($file, json_encode($data) . "\n");
        fclose($file);
        echo 'Dữ liệu đã được lưu.';
    } else {
        echo 'Lỗi khi mở tệp.';
    }
} else {
    echo 'Phương thức không hợp lệ.';
}
?>
