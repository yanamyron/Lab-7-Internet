<?php
    if (isset($_POST['num1']) && $_POST['num1']!='' && isset($_POST['num2']) && $_POST['num2']!='') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        echo "Сумма чисел $num1 і $num2 дорівнює ".($num1+$num2);
    }
    else {
        echo 'Помилка! Введіть числа';
    }
?>
