<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $sex = $_POST["sex"];
    $birthDate = $_POST["birthDate"];

    $data = "First Name: $firstName\nLast Name: $lastName\nSex: $sex\nBirth Date: $birthDate\n";

    // Lưu dữ liệu vào một tệp văn bản trong thư mục hiện tại
    $dataFile = fopen("data.txt", "a") or die("Unable to open file!");
    fwrite($dataFile, $data);
    fclose($dataFile);

    echo "Data has been saved successfully!";
    echo getcwd(); // In ra đường dẫn của thư mục hiện tại
}
?>
