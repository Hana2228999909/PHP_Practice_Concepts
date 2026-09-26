# PHP Associative Array & Loops

This project demonstrates how to use **Associative Arrays**, **foreach loops**, and **nested for loops** in PHP.

## Features

* Create an associative array
* Access array values using keys
* Display array data using `foreach`
* Use nested `for` loops
* Calculate multiplication results

## Associative Array Example

```php
$collection = array(
    "id" => 123,
    "class" => "CA2313",
    "mobile" => 123456789
);
```

## Foreach Loop

```php
foreach ($collection as $key => $value) {
    echo $key . " : " . $value . "<br>";
}
```

## Nested For Loop

The nested loop displays the row, column, and multiplication result from 1 to 5.

```php
for ($row = 1; $row <= 5; $row++) {
    for ($column = 1; $column <= 5; $column++) {
        $result = $row * $column;

        echo "Row is " . $row .
             ", Column is " . $column .
             ", Result is " . $result . "<br>";
    }
}
```

## Technologies Used

* PHP
* HTML

## Author

Hani Jama Hussein
