<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body>
<pre><?php


$playlist = [
  'Starry Night',
  'Moonlit Walk',
  'Whispering Wind',
  'Golden Horizon',
  'Sunny Days',
  ];
// $playlist = [];

  if(empty($playlist)) {
    echo "Your playlist needs an update. Time to discover more music!";
  }
  else {
    if (in_array('Sunny Days', $playlist)) {
      echo "You have great taste! 'Sunny Days' always lifts the moods!";
    }
    else if (count($playlist) > 1) {
      $playlist[1] = 'Solar Whispers';
    }
  }


  // if(!empty($playlist) && isset($playlist)) {
  //    var_dump($playlist);
  // }
  // else {
  //   var_dump("Your playlist needs an update. Time to discover more music!");
  // }

  // $playlist[1] = 'Sunny Days';


  // if(in_array("Sunny Days", $playlist)) {
  //   var_dump("You have great taste! 'Sunny Days' always lifts the mood!");
  // }



?></pre>
</body>
</html>