<?php
// Initial array
$myArray = [1, 2, 3, 4, 5];

// Insert an element at the beginning
array_unshift($myArray, 0);

// Insert an element at the end
$myArray[] = 6;

// Remove an element from the beginning
array_shift($myArray);

// Remove an element from the end
array_pop($myArray);

// Display the modified array
echo "Modified Array: ";
foreach ($myArray as $value) {
    echo $value . " ";
}
?>