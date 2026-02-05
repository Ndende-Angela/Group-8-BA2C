<?php
// This is a simple PHP script

// 1. Displaying a message
echo "Hello, World!<br>";

// 2. Working with variables
$name = "John Doe";
$age = 25;

// Concatenate and display variable values
echo "My name is " . $name . " and I am " . $age . " years old.<br>";

// 3. Conditional statement
if ($age >= 18) {
    echo "You are an adult.<br>";
} else {
    echo "You are a minor.<br>";
}

// 4. Loop example: Display numbers from 1 to 5
echo "Numbers: ";
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
echo "<br>";

// 5. Simple function
function greet($person) {
    return "Hello, " . $person . "!";
}

echo greet($name) . "<br>";

// 6. Associative array example
$fruits = ["apple" => "red", "banana" => "yellow", "grape" => "purple"];
foreach ($fruits as $fruit => $color) {
    echo "The color of " . $fruit . " is " . $color . ".<br>";
}
?>

