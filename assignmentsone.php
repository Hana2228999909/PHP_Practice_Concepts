<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Grade</title>
</head>

<body>
<?php

$a = 25;
$b = 10;
$c = 40;

$greatest = $a;
$smallest = $a;

if ($b > $greatest) {
    $greatest = $b;
}

if ($c > $greatest) {
    $greatest = $c;
}

if ($b < $smallest) {
    $smallest = $b;
}

if ($c < $smallest) {
    $smallest = $c;
}

echo "Greatest number: " . $greatest . "<br>";
echo "Smallest number: " . $smallest;



//exmple2


$number = 15;

if ($number % 3 == 0 && $number % 5 == 0) {
    echo "The number is divisible by both 3 and 5.";
}
elseif ($number % 3 == 0) {
    echo "The number is divisible by 3.";
}
elseif ($number % 5 == 0) {
    echo "The number is divisible by 5.";
}
else {
    echo "The number is not divisible by 3 or 5.";
}




//expmple3



echo "Odd numbers from 2 to 20:<br>";

for ($i = 2; $i <= 20; $i++) {

    if ($i % 2 != 0) {
        echo $i . " ";
    }
}

echo "<br><br>";

echo "Even numbers from 15 to 7:<br>";

for ($i = 15; $i >= 7; $i--) {

    if ($i % 2 == 0) {
        echo $i . " ";
    }
}


//exmaple4


echo "Numbers divisible by both 2 and 5:<br>";

for ($i = 50; $i >= 2; $i--) {

    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }
}

?>


</body>
</html>