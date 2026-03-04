<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=
  , initial-scale=1.0">
  <title>Else</title>
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
else if($serverStatus === 'error') {
  echo "🔴🔴🔴🔴🔴\n";
  echo '❌ We\'re got a seriouse error right now. <br>Please just call us at: +1 (234) 5678';
}
else {
  echo "🔴🔴🔴🔴🔴\n";
  echo '🔴 We\'re currently undergoing maintenance. Please check back later';
}

?>
</pre>
</body>
</html>