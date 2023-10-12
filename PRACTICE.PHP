<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>practice php</title>
</head>
<body>
<?php
echo "Hello world<br>";
#First Example
$variable = "Svariable";

print <<<END
This uses the "here document" syntax to output multiple lines with $variable interpolation. Note that the here document terminator must appear on a line with just a semicolon no extra whitespace!<br>
END;
#Second Example
print"This spans
multiple lines. The Newlines will be output as well<br>";

/* This is a comment wiht multiline
    Author : Muhammad Ali
    Purpose: Multilikne Comments Demo
    Subject: PHP
*/
print "An example with multi line comments";

$four = 2 + 2;
$four2  = 2 + 2 ;
$fout =
2+
2;

print"<br>$four";
print"<br>$four2";
print"<br>$fout";

$capital = 67;
print"<br>Variable capital is $capital<br>";

$greeting = "Welcome to PHP!";

if (3 == 2 + 1)
  print"Good - I haven't totally lost my mind.<br>";

if (3 == 2+1)
  print"Good - I haven't totally";
  print"lost my mind.<br>";

  echo "Hello PHP";

 //Variables
 //Integers
 $int_var = 12345;
 $another_int= -12345 + 12345;
print"<br>$int_var<br>$another_int";

$many = 2.2888800;
$many_2 = 2.111200;
$few = $many + $many_2;
print("$many + $many_2 = $few<br>");


?>
</body>
</html>