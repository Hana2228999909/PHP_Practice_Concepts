# Student Information Array – PHP

## Description

This PHP program uses a **multidimensional array** to store student information.

Each student has:

* Name
* Year of Birth
* District
* Phone Number

The program uses **nested foreach loops** to display all the information stored in the array.

## Code Explanation

### 1. Multidimensional Array

```php
$student = array (
    array ("Mohamed", 1990, "Hodan", "0608124390"),
    array ("Ahmed", 2001, "Yaaqshiid", "0608124391"),
    array ("Jaamac", 1986, "Shangaani", "0608124392"),
);
```

The `$student` array contains three students. Each student is stored as a separate array.

### 2. Displaying the Data

```php
foreach ($student as $s) {
    foreach ($s as $v)
        echo ("$v<br>");
}
```

The first `foreach` loop goes through each student.

The second `foreach` loop goes through each student's information and displays it on a new line.

## Output

The program displays:

* Mohamed
* 1990
* Hodan
* 0608124390
* Ahmed
* 2001
* Yaaqshiid
* 0608124391
* Jaamac
* 1986
* Shangaani
* 0608124392

## Technologies Used

* HTML
* PHP

## Purpose

This program demonstrates how to create and access a **multidimensional array in PHP** using nested `foreach` loops.
