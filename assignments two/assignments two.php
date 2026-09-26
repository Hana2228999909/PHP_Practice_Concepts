<!DOCTYPE html>
<html>
<head>
    <title>PHP Assignment 2</title>
</head>

<body>

<?php

// QUESTION 1

$arr = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

echo "<h2>Question 1</h2>";

echo "Array elements: ";

foreach ($arr as $value) {
    echo $value . " ";
}

echo "<br>";

$total = array_sum($arr);

echo "Total of all elements = " . $total . "<br>";

$evenTotal = 0;
$oddTotal = 0;

foreach ($arr as $value) {

    if ($value % 2 == 0) {
        $evenTotal += $value;
    } else {
        $oddTotal += $value;
    }
}

echo "Total of even elements = " . $evenTotal . "<br>";
echo "Total of odd elements = " . $oddTotal . "<br>";

$min = min($arr);

echo "Minimum element = " . $min . "<br>";

echo "Minimum positions = ";

foreach ($arr as $key => $value) {

    if ($value == $min) {
        echo $key . " ";
    }
}

echo "<br>";

$max = max($arr);

echo "Maximum element = " . $max . "<br>";

echo "Maximum positions = ";

foreach ($arr as $key => $value) {

    if ($value == $max) {
        echo $key . " ";
    }
}

echo "<hr>";


// QUESTION 2

$colors = array(

    "Light" => array(
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ),

    "Normal" => array(
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ),

    "Dark" => array(
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    )
);

echo "<h2>Question 2</h2>";

echo "<table border='1'>";

echo "<tr>";
echo "<th></th>";
echo "<th>Red</th>";
echo "<th>Green</th>";
echo "<th>Blue</th>";
echo "</tr>";

foreach ($colors as $row => $columns) {

    echo "<tr>";

    echo "<th>" . $row . "</th>";

    foreach ($columns as $value) {

        echo "<td>" . $value . "</td>";
    }

    echo "</tr>";
}

echo "</table>";

echo "<hr>";


// QUESTION 3

$students = array(

    "CA221" => array(
        "Name" => "shukri jama hussein",
        "Phone" => "0684281400",
        "Address" => "Laba Dhagax, Wardhiigley"
    ),

    "CA223" => array(
        "Name" => "hani jama hussein",
        "Phone" => "0614951557",
        "Address" => "Taleex, Hodan"
    ),

    "CA221-2" => array(
        "Name" => "hamdi jama hussein",
        "Phone" => "0615870020",
        "Address" => "Macmacaanka, Dharkeynley"
    )
);

echo "<h2>Question 3</h2>";

echo "<table border='1'>";

echo "<tr>";
echo "<th>Code</th>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
echo "</tr>";

foreach ($students as $code => $student) {

    echo "<tr>";

    echo "<td>" . $code . "</td>";
    echo "<td>" . $student["Name"] . "</td>";
    echo "<td>" . $student["Phone"] . "</td>";
    echo "<td>" . $student["Address"] . "</td>";

    echo "</tr>";
}

echo "</table>";

?>

</body>
</html>