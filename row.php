<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Grade</title>
</head>

<body>

<?php

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