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

            $categories = [
                'Programming',
                'Business',
                'Art & Drawing',
                'Self improvement',
                'History',
            ];

            foreach ($categories as $category) {
                // echo $category;
                if ($category === 'Business') continue;
                if ($category === 'Art & Drawing') continue;
                if ($category === 'Self improvement') break;
                var_dump($category);
            }



            ?></pre>
<pre>
            <?php
$cars = [
    'Hyundai' => [
        'model' => 'Tucson',
        'Vin' => '0001',
        'color' => 'grey'
    ],
    'Honda' => [
        'model' => 'civic',
        'Vin' => '0235',
        'color' => 'blue'
    ]
];
?>

<?php
foreach ($cars as $brand => $details) {
    echo "Brand: $brand\n";
    foreach ($details as $key => $value) {
        echo "$key: $value\n";
    }
    echo "\n";
}
?>
</pre>


    <ul>
        <?php foreach ($categories as $category): ?>
            <?php if ($category === 'Business') continue; ?>
            <?php if ($category === 'Art & Drawing'): ?>
                <?php continue; ?>
            <?php endif; ?>
            <li><?php echo $category; ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>