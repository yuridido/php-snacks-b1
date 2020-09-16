<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa
del calendario. Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->


<?php
$calendario = [
    [
        'sq_casa' => 'Raptors',
        'sq_ospite' => 'Bulls',
        'pun_casa' => 73,
        'pun_ospite' => 80,
    ],
    [
        'sq_casa' => 'Hornets',
        'sq_ospite' => 'Lakers',
        'pun_casa' => 67,
        'pun_ospite' => 92,
    ],
    [
        'sq_casa' => 'Heat',
        'sq_ospite' => 'Celtics',
        'pun_casa' => 103,
        'pun_ospite' => 95,
    ],
];

// var_dump(count($calendario));

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <ul>
            <?php for ($i = 0; $i < count($calendario); $i++) {
                $cal = $calendario[$i];
            ?>

            <li> <?php echo $cal['sq_casa'] . " - " . $cal['sq_ospite'] . " | " . $cal['pun_casa'] . "-" . $cal['pun_ospite'] ?> </li>
        <?php } ?>
        </ul>


    </body>
</html>
