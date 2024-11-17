<?php
// 1.Area and Perimeter of a Rectangle
$length = 10;
$width = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Area of the Rectangle: $area<br>";
echo "Perimeter of the Rectangle: $perimeter<br><br>";

// 2. VAT
$amount = 1000;
$vat = 0.15 * $amount;

echo "VAT (15%) on $amount is: $vat<br><br>";

// 3. Odd or Even
$number = 7;

if ($number % 2 == 0) {
    echo "$number is Even<br>";
} else {
    echo "$number is Odd<br>";
}
echo "<br>";

// 4.Largest Number
$a = 10;
$b = 20;
$c = 15;

if ($a > $b && $a > $c) {
    echo "Largest number is: $a<br>";
} elseif ($b > $c) {
    echo "Largest number is: $b<br>";
} else {
    echo "Largest number is: $c<br>";
}
echo "<br>";

// 5.All Odd Numbers Between 10 and 100
echo "Odd numbers between 10 and 100:<br>";
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo "$i ";
    }
}
echo "<br><br>";

// 6. Search an Element in an Array
$array = array(10, 20, 30, 40, 50);
$searchElement = 30;

$found = false;
foreach ($array as $element) {
    if ($element == $searchElement) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "$searchElement is found in the array.<br>";
} else {
    echo "$searchElement is not found in the array.<br>";
}
echo "<br>";

// 7. Print Shapes Using Nested Loops

// **** pattern
echo "Asterisk Pattern:<br>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
echo "<br>";

// Number Pattern
echo "Number Pattern:<br>";
$count = 1;
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$count ";
        $count++;
    }
    echo "<br>";
}
echo "<br>";

// Alphabet Pattern
echo "Alphabet Pattern:<br>";
$char = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$char ";
        $char++;
    }
    echo "<br>";
}
echo "<br>";

// 8. 2D Array and Shapes

// Shape with Numbers
echo "Shape with Numbers:<br>";
$numberArray = array(
    array(1, 2, 3),
    array(1, 2),
    array(1)
);

foreach ($numberArray as $row) {
    foreach ($row as $element) {
        echo "$element ";
    }
    echo "<br>";
}
echo "<br>";

// Shape with Alphabets
echo "Shape with Alphabets:<br>";
$charArray = array(
    array('A'),
    array('B', 'C'),
    array('D', 'E', 'F')
);

foreach ($charArray as $row) {
    foreach ($row as $element) {
        echo "$element ";
    }
    echo "<br>";
}
echo "<br>";
?>
