<?php
require_once __DIR__ . '/Models/prodotti.php';
require_once __DIR__ . '/Models/specie.php';
require_once __DIR__ . '/Models/cibo.php';


$specie_cane = new Specie('Cane', '<i class="fa-solid fa-dog"></i>');
$specie_gatto = new Specie('Gatto', '<i class="fa-solid fa-cat"></i>');
$specie_uccello = new Specie('Uccello', '<i class="fa-solid fa-dove"></i>');
$specie_pesce = new Specie('Pesce', '<i class="fa-solid fa-fish"></i>');

/* var_dump($specie_cane, $specie_gatto, $specie_uccello, $specie_pesce);
 */
$prodotti1 = new Prodotti(1, 'Collare', $specie_cane,  24.99, 'molto carino', '#');
$prodotti2 = new Prodotti(2, 'Osso', $specie_cane, 14.99, 'molto buono',  '#');
$prodotti3->set_ingredienti('pollo, manzo, verdure');
try{
    $prodotti3 = new Cibo(3, 'Crocchette', $specie_gatto, 34.99, 'molto croccanti ',  '#');

}catch (Exception $error){
    echo $error->getMessage();
};
$prodotti4 = new Cibo(4, 'Mangime per pesci', $specie_pesce, 8.99, 'molto nutrienti ',  '#');
$prodotti4->set_ingredienti('pesce, cereali, alghe');



/*  var_dump($prodotti3);
 */
$prodotti = [
    $prodotti1,
    $prodotti2,
    $prodotti3,
    $prodotti4
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolshop</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- BOOTSTRAP -->
    <!--  font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--  font-awesome -->

</head>

<body>
    <div class="container">

        <h1>Boolshop</h1>
        <h3>i nostri prodotti</h3>

        <div class="row">

            <?php foreach ($prodotti as $prodotti) : ?>
                <div class="col-12 col-md-3">
                    <div class="card h-100">
                        <!--                         <img src="..." class="card-img-top" alt="...">
 -->
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prodotti->get_name(); ?></h5>
                            <h6><?php echo $prodotti-> get_categoria()-> get_category_info()?></h6>
                            <p class="card-text"><?php echo $prodotti->get_description(); ?></p>
                            <p>prezzo: <?php echo $prodotti->get_prezzo(); ?>€</p>
                            <?php if (method_exists($prodotti, 'get_ingredienti')) : ?>
                                <p> ingredienti: <?php /** @var cibo $prodotti */ echo $prodotti->get_ingredienti();?></p>
                            <?php endif; ?>
                            <a href="#" class="btn btn-primary align-bottom m-1">Buy Now</a>
                        </div>
                    </div>
                </div>

            <?php endforeach ?>
        </div>

    </div>
</body>

</html>