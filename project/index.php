<?php
require 'content/php/Helper.php';
$real_mode = Helper::real_mode();
$color = 'color';
$price = 'price';
$cards = [
    0 => [
        $color => 'bronze',
        $price => 500
    ],
    1 => [
        $color => 'gold',
        $price => 1000
    ],
    2 => [
        $color => 'platinium',
        $price => 5000
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/content/css/home.css" />
    <title>Welcome</title>
</head>

<body>

    <div class="page_container">
        <p style="color: #037d96;">
            <?php if ($real_mode) {
                echo 'Real_mode: True';
            } ?>
        </p>
        <div class="cards">
            <?php foreach ($cards as $card) : ?>
                <div class="card">
                    <div class="card_inner <?= $card[$color] ?>">
                        <h2 class="card_title"><?= $card[$color] ?></h2>
                        <h3 class="card_price"><?= $card[$price] ?> €</h3>
                        <form action="/pay.php" method="GET">
                            <input type="hidden" name="price" value="<?= $card[$price] ?>">
                            <input type="hidden" name="mode" value="<?= $real_mode ? Helper::get_real_mode() : null ?>">
                            <input class="card_button" type="submit" value="Buy">
                        </form>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

</body>

</html>