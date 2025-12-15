<?php
// 1. Declare and initialize variables of various data types
$name = "Saikot";      // String
$age = 22;             // Integer
$height = 5.6;         // Float
$isStudent = true;     // Boolean

// Display variables
echo "Name: $name <br>";
echo "Age: $age <br>";
echo "Height: $height <br>";
echo "Student: " . ($isStudent ? "Yes" : "No") . "<br><br>";

// 2. Perform arithmetic operations
$num1 = 10;
$num2 = 3;

echo "Addition: " . ($num1 + $num2) . "<br>";
echo "Subtraction: " . ($num1 - $num2) . "<br>";
echo "Multiplication: " . ($num1 * $num2) . "<br>";
echo "Division: " . ($num1 / $num2) . "<br><br>";

// 3. Output sum using echo and print
echo "Sum using echo: " . ($num1 + $num2) . "<br>";
print "Sum using print: " . ($num1 + $num2) . "<br><br>";

// 4. Modify the script: Use var_dump()
echo "<h3>Variable Types and Values:</h3>";
var_dump($name);
echo "<br>";
var_dump($age);
echo "<br>";
var_dump($height);
echo "<br>";
var_dump($isStudent);
echo "<br><br>";
?>