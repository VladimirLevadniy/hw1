<?php
//Задание №1
$name = 'Владимир';
$age = '25';
echo "Меня зовут $name";
echo '<br>';
echo "Мне $age лет";
echo '<br>';
echo '“!|/’”\\';

echo '<br>';
echo '<br>';
echo '<br>';

//Задание №2
const TOTAL_IMAGES = 80;
const FLET_IMAGES = 23;
const PENCIL_IMAGES = 40;

$paintImages = TOTAL_IMAGES - FLET_IMAGES - PENCIL_IMAGES;
echo "Красками нарсовано $paintImages рисунков.";

echo '<br>';
echo '<br>';
echo '<br>';

//Задание №3
$age = 56;

if ($age >= 18 && $age <= 65) {
    echo "Вам еще работать и работать.";
} elseif ($age > 65) {
    echo "Вам пора на пенсию.";
} elseif ($age >= 1 && $age <= 17) {
    echo "Вам еще рано работать.";
} else {
    echo "Неизвестный возраст";
}

echo '<br>';
echo '<br>';
echo '<br>';

//Задание №4
$day = 5;
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это будний день";
        break;
    case 6:
    case 7:
        echo "Это выходной день";
        break;

    default:
        echo "Неизвестный день";
}

echo '<br>';
echo '<br>';
echo '<br>';

//Задание №5
$bmw = [
    'model' => 'x5',
    'speed' => '120',
    'doors' => '5',
    'year' => '2015'
];

$toyota = [
    'model' => 'rav4',
    'speed' => '115',
    'doors' => '5',
    'year' => '2017'
];

$kia = [
    'model' => 'ceed',
    'speed' => '110',
    'doors' => '6',
    'year' => '2019'
];

$cars = ['bmw' => $bmw, 'toyota' => $toyota, 'kia' => $kia];

foreach ($cars as $name => $car) {
    echo "CAR $name<br>";
    echo " {$car['model']} {$car['speed']} {$car['doors']} {$car['year']} <br><br>";
}

echo '<br>';
echo '<br>';
echo '<br>';

//Задание №6
echo '<table>';
for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 10; $j++) {
        $result = $i * $j;
        echo '<td>';
        if ($i % 2 == 0 && $j % 2== 0) {
            echo "($result)";
        } elseif ($i % 2 !== 0 && $j %2 !== 0) {
            echo "[$result]";
        } else {
            echo "$result";
        }
        echo '</td>';
    }
    echo '</tr>';
}
