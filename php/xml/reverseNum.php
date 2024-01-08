<?php
function reverseNumber($number) {
 $reverse = 0;

 while ($number > 0) {
  $digit = $number % 10;
  $reverse = $reverse * 10 + $digit;
  $number = (int)($number / 10);
 }

 return $reverse;
}

// Example usage:
$numberToReverse = 12345;

echo "Original Number: $numberToReverse<br>";
echo "Reverse: " . reverseNumber($numberToReverse);
?>