<?php
// Single-dimensional numeric array
$numericArray = [10, 20, 30, 40, 50];


echo "<h3> Dimensional Numeric Array</h3>";
// Displaying elements with index values for the single-dimensional array
echo "Elements of the numeric array with index values: " . "<br/> ";
for ($i = 0; $i < count($numericArray); $i++) {
    echo "Index $i: " . $numericArray[$i] . "<br/> ";
}

// Accessing and displaying the element at index number 3 in the single-dimensional array
$indexNumber = 3;
echo "\nElement at index $indexNumber: " . $numericArray[$indexNumber] . "<br/>";

// Multidimensional numeric array
$multiArray = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

// Accessing and displaying specific elements of the multidimensional array
echo "<h3>Multidimensional  Numeric Array </h3>";

echo "Element at row 2, column 1: " . $multiArray[1][0] . "<br/> ";
echo "Element at row 3, column 3: " . $multiArray[2][2] . "<br/> ";
echo "Elements of the multidimensional array: <br/>";



echo "Elements of the multidimensional array:";
foreach ($multiArray as $row) {
    foreach ($row as $element) {
        echo $element . " ";
    }
    echo " ";
}
