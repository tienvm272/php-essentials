<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=
  , initial-scale=1.0">
  <title>Alternative</title>
  <link rel="stylesheet" href="simple.css">
</head>

<body>
  <pre>
<?php

$pageTitle = 'PHP is amazing!';

?>

</pre>
  <?php
  if (!empty($pageTitle)) {
    echo "<h1><span>{$pageTitle}</span></h1>";
  }
  ?>


  <?php if (!empty($pageTitle)): ?>
    <h1>
      <span><?php echo $pageTitle; ?></span>
    </h1>
  <?php endif; ?>





</body>

</html>