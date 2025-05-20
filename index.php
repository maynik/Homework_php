<?php
#Поиск простых чисел до 100
for ($num = 2; $num <= 100; $num++) {
    $isPrime = true;
    for ($i = 2; $i < $num; $i++) {  
        if ($num % $i == 0) {        
            $isPrime = false;       
            break;                   
        }
    }
    if ($isPrime) {
        echo $num . " ";             
    }
}
echo "\n";
#Массив случайных чисел
$numbers = [];
for ($i = 1; $i <= 10; $i++) {
    $numbers[] = rand(1, 50);
}
echo "Згенеровані числа від 1 до 50 " . " ";
print_r($numbers);
echo "Парні числа ";
foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        echo $number . " ";
    }
}
$sumOdd = 0;
foreach ($numbers as $number) {
    if ($number % 2 != 0) {
        $sumOdd += $number;
    }
}

echo "\nСумма непарних чисел: " . $sumOdd;
echo "\n";
#Пирамида из символов
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}
#Калькулятор (через switch)
$a = 10;
$b = -1;
$operator = '+';

switch ($operator) {
    case '+':
        echo "Результат: $a + $b = " . ($a + $b);
        break;
    case '-':
        echo "Результат: $a - $b = " . ($a - $b);
        break;
    case '*':
        echo "Результат: $a * $b = " . ($a * $b);
        break;
    case '/':
        if ($b !== 0) {
            echo "Помилка";
        } else {
            echo "Результат: $a / $b = " . ($a / $b);
        }
        break;
    default:
        echo "Невідомий оператор";
}
echo "\n";
#Определение типа файла по расширению
$filename = "document.doc";
$extension = pathinfo($filename, PATHINFO_EXTENSION);

switch ($extension) {
    case 'jpg':
    case 'png':
        echo "Зображення";
        break;

    case 'doc':
    case 'pdf':
        echo "Документ";
        break;

    default:
        echo "Невідомий файл";
}