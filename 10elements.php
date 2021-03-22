<?php
    $name = 'Антон Ершов';
    $s = array(
        'Влад' => 1,
        'Антон' => 2,
        'Дима' => 3,
        'Настя' => 4,
        'Егор' => 5,
        'Миша' => 6,
        'Паша' => 7,
        'Саша' => 8,
        'Полина' => 9,
        'Маша' => 10
    );
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>art3mis homework</title>
</head>
<body>
    <div class="text">
        <p><?= $name ?></p>
    </div>

    <?php foreach ($s as $a => $d)  { ?>
        <div><?php echo "$a => $d \n"; ?></div>

    <?php } ?>
</body>
</html>