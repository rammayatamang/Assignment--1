
<?php
//operators

$a = 15;
$b = 4;

echo "a = $a, b = $b<br>";
echo "Addition (a + b): " . ($a + $b) . "<br>";
echo "Subtraction (a - b): " . ($a - $b) . "<br>";
echo "Multiplication (a * b): " . ($a * $b) . "<br>";
echo "Division (a / b): " . ($a / $b) . "<br>";
echo "Modulus (a % b): " . ($a % $b) . " (remainder)<br> <br>" ; 

// initializing variables using assignment operators

$x = 15;
echo "Initial value of x: $x<br>";

$x += 5;  // x = x + 5
echo "After x += 5: $x<br>";

$x -= 3;  // x = x - 3
echo "After x -= 3: $x<br>";

$x *= 2;  // x = x * 2
echo "After x *= 2: $x<br>";

$x /= 7;  // x = x / 7
echo "After x /= 4: $x<br>";

$x %= 2;  // x = x % 2
echo "After x %= 3: $x<br>";

?>

