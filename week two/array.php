<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Grade</title>
</head>

<body>

<?php

// Associative Array
$collection = array(
    "id" => 123,
    "class" => "CA2313",
    "mobile" => 123456789
);

// Access one value
echo $collection["id"] . "<br><br>";


// Foreach Loop
foreach ($collection as $key => $value) {
    echo $key . " : " . $value . "<br>";
}

echo "<br>";


// Nested For Loop
for ($row = 1; $row <= 5; $row++) {

    for ($column = 1; $column <= 5; $column++) {

        $result = $row * $column;

        echo "Row is " . $row .
             ", Column is " . $column .
             ", Result is " . $result . "<br>";
    }
}

?>

</body>
</html>