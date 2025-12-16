<?php
$m = 4;

switch ($m) {
    case 1:
    case 3:
        echo "Tháng $m có 31 ngày <br>";
        break;
    case 2:
        echo "Tháng $m có 28 hoặc 29 ngày <br>";
        break;
    case 4:
        echo "Tháng $m có 30 ngày <br>";
        break;
    default:
        echo "Tháng $m không hợp lệ <br>";
}
?>
