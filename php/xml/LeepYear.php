<?php
function isLeapYear($year) {
 if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
  return true;
 } 
 else {
  return false;
 }
}

// Example usage:
$yearToCheck = 2024;

if (isLeapYear($yearToCheck)) {
 echo "$yearToCheck is a Leap Year.";
} else {
 echo "$yearToCheck is not a Leap Year.";
}
?>