<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập thực hành PHP</title>
</head>
<body>
    
<?php
//BÀI 1
echo "<b>Bài 1: Viết một chương trình PHP để in ra số chẵn từ 1 đến 10.</b><br>";
echo "Các số chẵn từ 1 đến 10 là: ";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
echo "<br><br>"; 


// BÀI 2
echo "<b>Bài 2: Viết một chương trình PHP để kiểm tra xem một số nguyên có phải là số nguyên tố hay không.</b><br>";

function kiemTraSoNguyenTo($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

$so = 7; 
if (kiemTraSoNguyenTo($so)) {
    echo "$so là số nguyên tố.";
} else {
    echo "$so không phải là số nguyên tố.";
}
echo "<br><br>";

// BÀI 3
echo "<b>Bài 3: Viết hàm in hình chữ nhật sử dụng dấu sao (*)</b><br>";

function inHinhChuNhat($chieuRong, $chieuCao) {
    for ($i = 0; $i < $chieuCao; $i++) {
        for ($j = 0; $j < $chieuRong; $j++) {
            echo "*";
        }
        echo "<br>"; 
    }
}

inHinhChuNhat(5, 3);
?>
