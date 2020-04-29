<?php
$arr = [
        [
            'image' => "/public/img/super-mario.png",
            'name' => "Mario Bros",
            'description' => "Voyage à travers le Royaume Champignon afin de sauver la princesse Peach des griffes de Bowser"
        ],
        [
            'image' => "/public/img/donkey.png",
            'name' => "Donkey Kong",
            'description' => "Gorille costaud qui, pour le prix de quelques bananes poursuit un gros et cruel crocodile balourd nommé King K. Rool."
        ],
        [
            'image' => "/public/img/star-fox.png",
            'name' => "Fox McCloud",
            'description' => "Il s’agit d’un renard anthropomorphique, personnage principal de la série. Il est le meneur de l’unité de mercenaires d'élite Star Fox."
        ],
        [
            'image' => "/public/img/pikachu.png",
            'name' => "Pikachu",
            'description' => "Pokémon de type électrique: grâce à des poches situées dans ses joues, il est capable de générer des arcs électriques d'intensité variable."
        ]
    ];
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="public/css/index.css">
        <title>IT-Gaming | Personnages</title>
    </head>
    <body>
        <?php include 'templates/header.php'; ?>
        <div class="listing">
            <table>
                <tbody>
                    <?php foreach ($arr as $key => $value): ?>
                        <tr>
                            <?php if($key % 2 == 0): ?>
                                <td class="img"><img src="<?= $value['image'] ?>" alt=""></td>
                                <td class="name"><?= $value['name']?></td>
                                <td class="description left"><?= $value['description']?></td>
                            <?php else: ?>
                                <td class="description right"><?= $value['description']?></td>
                                <td class="name"><?= $value['name']?></td>
                                <td class="img"><img src="<?= $value['image'] ?>" alt=""></td>
                            <?php endif ?>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <?php include 'templates/footer.php' ?>
    </body>
</html>
<?php
// foreach ($arr as $value) {
//     echo "<tr>";
//     echo "<td> ".$value['image']." </td>";
//     echo "<td> ".$value['name']." </td>";
//     echo "<td> ".$value['description']." </td>";
//     echo "</tr>";
// } ?>
