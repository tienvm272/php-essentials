<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=
  , initial-scale=1.0">
  <title>Isset and empty</title>
  <link rel="stylesheet" href="simple.css">
</head>
<body>
<pre>
<?php

$pageTitle = 'PHP is amazing!';
// $pageTitle = '0';
// $pageTitle = '';
// unset($pageTitle);

var_dump(isset($pageTitle));
var_dump(empty($pageTitle));

?>

</pre>

<?php

if (isset($pageTitle) && $pageTitle !== '') {
  echo "<h1>{$pageTitle}</h1>";
}
if(!empty($pageTitle)) {
  echo "<h1>{$pageTitle}</h1>";
}

?>
</body>
</html>