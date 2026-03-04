<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=
  , initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="simple.css">
</head>
<body>
<pre>
<?php

$meaning = 42;
// echo ($meaning * 2) . "\n";
echo ($meaning * 2) . "\n";
echo ($meaning / 2) . "\n";
echo ($meaning + 2) . "\n";
echo ($meaning - 2) . "\n";

// echo '5' + '6';
// echo round(3.33, 1);

// $meaning = $meaning * 2;
$meaning *= 2;
$meaning /= 2;
$meaning += 2;
$meaning -= 2;
echo $meaning;
?>

<?php
phpinfo();
?>

</pre>

</body>
</html>