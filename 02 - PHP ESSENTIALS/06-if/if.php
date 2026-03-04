<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=
  , initial-scale=1.0">
  <title>If</title>
  <link rel="stylesheet" href="simple.css">
</head>
<body>
<pre>
<?php
include 'vars.php';

if ($serverStatus === 'ok') {
  echo "🟢🟢🟢🟢🟢\n";
  echo '🟢 Welcome to our website! Browse and enjoy our content';
}
if ($serverStatus === 'maintenance') {
  echo "🔴🔴🔴🔴🔴\n";
  echo '🔴 We\'re currently undergoing maintenance. Please check back later';
}

echo "\n----\n";
if ($serverStatus === 'ok') echo "🟢🟢🟢🟢🟢\n";
if ($serverStatus === 'maintenance') echo "🔴🔴🔴🔴🔴\n";

?>
</pre>
</body>
</html>