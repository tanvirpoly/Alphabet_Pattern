<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alphabet Pattern</title>
</head>
<body>

<h2>Print Alphabet Pattern (TANVIR) by PHP Program</h2>


<?php

// T
echo "<pre>";
for ($row = 0; $row < 11; $row++) {
  for ($col = 0; $col <= 13; $col++) {
  if ($col == 12 or ($row == 0 and $col > 0 and $col < 13)) {
            echo "* ";    
       } else { 
            echo "&nbsp;";   
	}        
  }
   echo "<br>";
}
echo "<br>";

// A
echo "<pre>";
for ($row = 0; $row <= 12; $row++) {
    for ($col = 0; $col <= 12; $col++) {
        if ((($col == 1 or $col == 12) and $row != 0) or (($row == 0 or $row == 5) and ($col > 1 and $col < 12))) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
echo "</pre>";
echo "<br>";

// N
echo "<pre>";
for ($row = 0; $row < 11; $row++) {
    for ($col = 0; $col <= 12; $col++) {
        if ($col == 0 OR $col == 12 OR ($row == $col - 1)) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br/>";
}
echo "</pre>";
echo "<br>";

// V
for ($row = 0; $row < 16; $row++)
{
  for ($col = 0; $col <= 16; $col++)
	{
          if ((($col == 4 or $col == 14) and $row < 11) or ($row == 12 and $col == 9) or ($row == 11 and ($col == 6 or $col == 12)))
            echo "* ";    
        else  
            echo " ";     
	}        
  echo "\n";
}
echo "<br>";

// I
echo "<pre>";
for ($row = 0; $row < 11; $row++) {
    for ($col = 0; $col <= 12; $col++) {
        if ($col == 5 OR ($row == 0 AND $col > 0 AND $col < 10) OR ($row == 10 AND $col > 0 AND $col < 10)) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br/>";
}
echo "</pre>";
echo "<br>";

// R
echo "<pre>";
for ($row = 0; $row < 12; $row++) {
    for ($col = 0; $col <= 12; $col++) {
        if ($col == 1 or (($row == 0 or $row == 5) and $col > 1 and $col < 9) or ($col == 9 and $row != 0 and $row < 5) or ($col == $row - 2 and $row > 4)) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
echo "</pre>";
?>


</body>
</html>