<?php
// Example demonstrating the creation and usage  associative array
$assocArray = [
    'name' => 'vartik',
    'age' => 20,
    'class' => 'BCA'
];

// Single Dimensional associative array
echo "<h3>Single Dimensional associative array</h3>";
foreach ($assocArray as $key => $value) {
    echo "$key: $value <br/>";
}

// Multidimensional associative array
$multiAssocArray = [
    'student1' => ['name' => 'Vartik', 'age' => 20],
    'student2' => ['name' => 'Kitrav', 'age' => 21],
    'student3' => ['name' => 'Anand', 'age' => 19]

];

// Displaying elements of the multidimensional associative array
echo "<h3>Multidimensional Associative Array</h3>";
foreach ($multiAssocArray as $student => $details) {
    echo "$student - Name: $details[name], Age: $details[age] <br/>";
}
