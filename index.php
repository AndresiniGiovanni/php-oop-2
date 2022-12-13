<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).

BONUS (Opzionale):
Il cliente potrà sia comprare i prodotti come ospite, senza doversi registrarsi nello store, oppure può iscriversi e creare un account per ricevere cosi il 20% di sconto.
Il cliente effettua il pagamento dei prodotti nel carrello con la carta di credito, che non deve essere scaduta. -->

<?php
include_once __DIR__ . './Models/Category.php';
include_once __DIR__ . './Models/Food.php';
include_once __DIR__ . './Models/Games.php';
include_once __DIR__ . './Models/Kennels.php';


$categorydog = new Category('dog');
$iconsDog = new Category('icon.jpg');
$foodDog = new Food('dog.jpg', 'Bag', 46.99, $categorydog, ['Salmone,', 'Agnello,', 'Maiale'], 12000);
$gamesDog = new Games('bone.jpg', 'Bone For Dogs', 12.99, $categorydog, ['White', 'Black', 'Red'], 200);
$kennelDog = new kennels('kennel.jpg', 'kennel', 32.99, $categorydog, ['Black', 'White', 'Red'], 2500, '58X46X38cm');


$categorycat = new Category('cat');
$iconsCat = new Category('icon.jpg');
$foodCat = new Food('cat.jpg', 'Cans', 15.34, $categorycat, ['Pollo,', 'Tacchino,', 'Salmone'], 4800);
$gamesCat = new Games('Balls.jpg', 'Balls For Cat', 8.99, $categorycat, ['White', 'Black', 'Red'], 200);
$kennelCat = new kennels('Kennel.jpg', 'kennel', 29, $categorycat, ['Black', 'White', 'Red'], 1000, '40X40X2cm');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
    <section style="background-color: #eee;">

        <!--  INIZIO CARD CANI   -->
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                    <div class="card my-card">
                        <div class="d-flex justify-content-between p-1">
                        </div>
                        <img src="./img/dog/<?php echo $iconsDog->getIcons() ?>" alt=""
                            class="my-icons position-absolute">
                        <img src="./img/dog/<?php echo $foodDog->getImage() ?>" class="card-img-top my-img" alt="" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">
                                    <?php echo $foodDog->getTitle() ?>
                                </h5>
                                <h5 class="text-dark mb-0">
                                    <?php echo $foodDog->getPrice() ?>&euro;
                                </h5>
                            </div>
                            <p>
                                Ingredients:
                                <?php foreach (($foodDog->getIngredients()) as $ingredients)
                                    echo $ingredients . ' ' ?>
                            </p>
                            <div>
                                Weight: 
                                <?php echo $foodDog->getWeight() ?>g.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                    <div class="card my-card">
                        <div class="d-flex justify-content-between p-3">
                        </div>
                        <img src="./img/dog/<?php echo $iconsDog->getIcons() ?>" alt=""
                            class="my-icons position-absolute">
                        <img src="./img/dog/<?php echo $gamesDog->getImage() ?>" class="card-img-top my-img" alt="" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">
                                    <?php echo $gamesDog->getTitle() ?>
                                </h5>

                                <h5 class="text-dark mb-0">
                                    <?php echo $gamesDog->getPrice() ?>&euro;
                                </h5>
                            </div>
                            <p>
                                colors:
                                <?php foreach (($gamesDog->getColor()) as $color)
                                    echo $color . ' ' ?>
                            </p>
                            <div>
                                Weight: 
                                <?php echo $gamesDog->getWeight() ?>g.
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                    <div class="card my-card">
                        <div class="d-flex justify-content-between p-3">
                        </div>
                        <img src="./img/dog/<?php echo $iconsDog->getIcons() ?>" alt=""
                            class="my-icons position-absolute">
                        <img src="./img/dog/<?php echo $kennelDog->getImage() ?>" class="card-img-top my-img" alt="" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">
                                    <?php echo $kennelDog->getTitle() ?>
                                </h5>
                                <h5 class="text-dark mb-0">
                                    <?php echo $kennelDog->getPrice() ?>&euro;
                                </h5>
                            </div>
                            <p>
                                colors:
                                <?php foreach (($kennelDog->getColor()) as $color)
                                    echo $color . ' ' ?>
                            </p>
                            <div>
                                Weight: 
                                <?php echo $kennelDog->getWeight() ?>g.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--  INIZIO CARD GATTI   -->

        <div class="container py-5">
            <div class="row">
                <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                    <div class="card my-card">
                        <div class="d-flex justify-content-between p-3">
                        </div>
                        <img src="./img/cat/<?php echo $iconsDog->getIcons() ?>" alt=""
                            class="my-icons position-absolute">
                        <img src="./img/cat/<?php echo $foodCat->getImage() ?>" class="card-img-top my-img" alt="" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">
                                    <?php echo $foodCat->getTitle() ?>
                                </h5>
                                <h5 class="text-dark mb-0">
                                    <?php echo $foodCat->getPrice() ?>&euro;
                                </h5>
                            </div>
                            <p>
                                Ingredients:
                                <?php foreach (($foodCat->getIngredients()) as $ingredients)
                                    echo $ingredients . ' ' ?>
                            </p>
                            <div>
                                Weight: 
                                <?php echo $foodCat->getWeight() ?>g.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                    <div class="card my-card">
                        <div class="d-flex justify-content-between p-3">
                        </div>
                        <img src="./img/cat/<?php echo $iconsDog->getIcons() ?>" alt=""
                            class="my-icons position-absolute">
                        <img src="./img/cat/<?php echo $gamesCat->getImage() ?>" class="card-img-top my-img" alt="" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">
                                    <?php echo $gamesCat->getTitle() ?>
                                </h5>
                                <h5 class="text-dark mb-0">
                                    <?php echo $gamesCat->getPrice() ?>&euro;
                                </h5>
                            </div>
                            <p>
                                colors:
                                <?php foreach (($gamesCat->getColor()) as $color)
                                    echo $color . ' ' ?>
                            </p>
                            <div>
                                Weight: 
                                <?php echo $gamesCat->getWeight() ?>g.
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                    <div class="card my-card">
                        <div class="d-flex justify-content-between p-3">
                        </div>
                        <img src="./img/cat/<?php echo $iconsDog->getIcons() ?>" alt=""
                            class="my-icons position-absolute">
                        <img src="./img/cat/<?php echo $kennelCat->getImage() ?>" class="card-img-top my-img" alt="" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">
                                    <?php echo $kennelCat->getTitle() ?>
                                </h5>
                                <h5 class="text-dark mb-0">
                                    <?php echo $kennelCat->getPrice() ?>&euro;
                                </h5>
                            </div>
                            <p>
                                colors:
                                <?php foreach (($kennelCat->getColor()) as $color)
                                    echo $color . ' ' ?>
                            </p>
                            <div>
                                Weight: 
                                <?php echo $kennelCat->getWeight() ?>g.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>