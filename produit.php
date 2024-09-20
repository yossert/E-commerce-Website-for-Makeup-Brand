<?php
include "inc/functions.php";
$categories=getAllCategories();
if(isset($_GET['id'])){
    $produit=getProduitsById($_GET['id']);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-SHOP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style_produit.css">
    <style>
        
        .footer{
            width: 100%;
            height: 60vh;
            background-color: #212529;
    }
    .upper{
        height: 80%;
        width: 100%;
    }
    .lower{
        width: 100%;
        height: 20%;
        
    }
    </style>
    </head>
    <body>
        <?php
            include "inc/header_reste.php";
        ?>
        <div class="container mt-5">
            <div class="row">
                <div class="card col-8 offset-2 mx-auto" style="width: 12rem;">
                    <img src="images/<?php echo $produit['image']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $produit['nom'] ?></h5>
                        <p class="card-text"><?php echo $produit['description'] ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $produit['prix'] ?> DT</li>
                        <li class="list-group-item"><?php echo $produit['categorie'] ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="upper">
                <div id="b"></div>
                <div id="b"></div>
                <div id="b"></div>
                <div id="b"></div>
            </div>
            <div class="lower"></div>
        </div>
    </body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>