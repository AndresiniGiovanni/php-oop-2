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
var_dump($categorydog);



$product = new Product('dog.jpg', 'busta', 2.80, $categorydog);
var_dump($product);

$foodDog = new Food('dog.jpg', 'busta', 46.99, $categorydog, ['Salmone', 'Agnello', 'Maiale'], 12000);
var_dump($foodDog);
$gamesDog = new Games('bone.jpg', 'Bone For Dogs', 12.99, $categorydog, ['White', 'Black', 'Red'], 200);
var_dump($gamesDog);
$kennelDog = new kennels('kennel.jpg', 'kennel', 50, $categorydog, ['Black', 'White', 'Red'], 2500, '58X46X38cm');
var_dump($kennelDog);


$categorycat = new Category('cat');
$foodCat = new Food('cat.jpg', 'cans', 15.34, $categorycat, ['Pollo', 'Tacchino', 'Salmone'], 4800);
var_dump($foodCat);
$gamesCat = new Games('Bells.jpg', 'Bells For Cat', 8.99, $categorycat, ['White', 'Black', 'Red'], 200);
var_dump($gamesCat);
$kennelCat = new kennels('kennel.jpg', 'kennel', 29, $categorycat, ['Black', 'White', 'Red'], 1000, '40X40X2cm');
var_dump($kennelCat);


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

    <title>Document</title>
</head>

<body>
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
                    <div class="card">
                        <div class="d-flex justify-content-between p-3">
                            <p class="lead mb-0">Today's Combo Offer</p>
                            <div class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                                style="width: 35px; height: 35px;">
                                <p class="text-white mb-0 small">x4</p>
                            </div>
                        </div>
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/4.webp"
                            class="card-img-top" alt="Laptop" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                                <p class="small text-danger"><s>$1099</s></p>
                            </div>

                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">HP Notebook</h5>
                                <h5 class="text-dark mb-0">$999</h5>
                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                <p class="text-muted mb-0">Available: <span class="fw-bold">6</span></p>
                                <div class="ms-auto text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
                    <div class="card">
                        <div class="d-flex justify-content-between p-3">
                            <p class="lead mb-0">Today's Combo Offer</p>
                            <div class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                                style="width: 35px; height: 35px;">
                                <p class="text-white mb-0 small">x2</p>
                            </div>
                        </div>
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/7.webp"
                            class="card-img-top" alt="Laptop" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                                <p class="small text-danger"><s>$1199</s></p>
                            </div>

                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">HP Envy</h5>
                                <h5 class="text-dark mb-0">$1099</h5>
                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                <p class="text-muted mb-0">Available: <span class="fw-bold">7</span></p>
                                <div class="ms-auto text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
                    <div class="card">
                        <div class="d-flex justify-content-between p-3">
                            <p class="lead mb-0">Today's Combo Offer</p>
                            <div class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                                style="width: 35px; height: 35px;">
                                <p class="text-white mb-0 small">x3</p>
                            </div>
                        </div>
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/5.webp"
                            class="card-img-top" alt="Gaming Laptop" />
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                                <p class="small text-danger"><s>$1399</s></p>
                            </div>

                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Toshiba B77</h5>
                                <h5 class="text-dark mb-0">$1299</h5>
                            </div>

                            <div class="d-flex justify-content-between mb-2">
                                <p class="text-muted mb-0">Available: <span class="fw-bold">5</span></p>
                                <div class="ms-auto text-warning">
                                    <i class="fa fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>