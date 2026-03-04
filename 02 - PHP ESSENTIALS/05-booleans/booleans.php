<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=
  , initial-scale=1.0">
  <title>Booleans</title>
  <link rel="stylesheet" href="simple.css">
</head>
<body>
<pre>
<?php

var_dump(true);
var_dump(false);
echo "-----\n";

$value = true;
var_dump($value);
echo "-----\n";

$meaning = 42;
var_dump($meaning > 13);
// var_dump(42 > 13);
// var_dump(40 + 2 > 13);


var_dump($meaning < 13);
var_dump($meaning >= 13);
var_dump($meaning <= 13);

var_dump(13 <= 13);
var_dump(13 < 13);
echo "-----\n";

$name = 'Tien';
var_dump($name === 'Tien');
var_dump($name !== 'Tien');


$age = 30;
var_dump($age === 30);
var_dump($age === '30');
var_dump($age == '30');
var_dump($age != '30');


?>
</pre>
</body>
</html>