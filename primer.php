<?php
include "inc/functions.php";
$categories=getAllCategories();
if(isset($_GET['id'])){
    $produit=getProduitsById($_GET['id']);
}
?>
<style>
    .vd{
        width:100%;
        height: 60vh;
        top:50%;
    }
</style>
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
    <body>
        <?php
            include "inc/header_reste.php";
        ?>

    <div>
            <div>
                <video autoplay muted loop plays-inline class="vd" >
                    <source src="tx.mp4" type="video/mp4" />
                </video>
            </div>
    </div>
</body>
</html>