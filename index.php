<?php
require_once 'product.php';
require_once 'trait.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodotti per animali</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Prodotti per animali</h1>
    <div class="container">
    <?php 
    $products = array(
        new DogProduct('Cuccia per cani', 100,'img/cuccia.jpg','Medio'),
        new CatProduct('Lettiera per gatti',50,'img/lettiera.jpg','Chiusa'),
        new CatProduct('Lettiera per gatti',70,'img/lettieraap.jpg','Aperta'),
        new FishProduct('Acquario',200,'img/acquario.jpg','Dolce'),
        new FishProduct('Acquario',300,'img/acquario2.jpg','Dolce'),
        new FishProduct('Cibo per pesci',5,'img/cibopesci.jpg','Dolce')
    )  ;
    $products[0]->applyDiscount($products[0]->getPrice()*0.3);
    $products[3]->applyDiscount($products[3]->getPrice()*0.4);
    foreach ($products as $product) {
        echo '<div class="product">';
        echo '<h2>' . $product->getName() . '</h2>';
        echo '<div class="product-img">';
        echo '<img src="' . $product->getImage() . '" alt="' . $product->getName() . '">';
        echo '</div>';
        echo '<p>Prezzo: ' . $product->getPrice() . ' euro</p>';
        if ($product instanceof DogProduct) {
            echo '<p>Taglia: ' . $product->getSize() . '</p>';
        } elseif ($product instanceof CatProduct) {
            echo '<p>Tipo di gioco: ' . $product->getType() . '</p>';
        } elseif ($product instanceof FishProduct) {
            echo '<p>Tipo di acqua: ' . $product->getWaterType() . '</p>';
        }
        echo '</div>';
    }
    ?>    
    </div>
</body>
</html>
