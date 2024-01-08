<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Chess Board</title>
 <style>
  body {
   display: flex;
   flex-wrap: wrap;
   justify-content: space-evenly;
   max-width: 400px;
   margin: 0 auto;
  }

  .square {
   width: 50px;
   height: 50px;
  }

  .white {
   background-color: #f0d9b5;
  }

  .black {
   background-color: #b58863;
  }
 </style>
</head>
<body>
 <?php
 // Loop through 8 rows
 for ($row = 1; $row <= 8; $row++) {
  // Loop through 8 columns
  for ($col = 1; $col <= 8; $col++) {
   // Calculate the total square number
   $totalSquare = $row + $col;

   // Determine if the square should be white or black based on the total square number
   $isWhite = $totalSquare % 2 == 0;

   // Output the square with the appropriate class
   echo '<div class="square ' . ($isWhite ? 'white' : 'black') . '"></div>';
  }
 }
 ?>
</body>
</html>