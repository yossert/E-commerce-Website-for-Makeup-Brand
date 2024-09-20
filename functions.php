<?php 
function connect(){
    $servername="localhost";
    $DBuser = "root";
    $DBpassword = "";
    $DBname = "ecommerce";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        }
        return $conn;
}
function getAllCategories(){
    $conn=connect();
$requette="SELECT * FROM categories";
$resultat=$conn->query($requette);
$categories=$resultat->fetchAll();
return $categories;
}
function getAllProduits(){
    $conn=connect();
    $requette="SELECT * FROM produits";
    $resultat=$conn->query($requette);
    $produits=$resultat->fetchAll();
    return $produits;
}
function searchProduit($keywords){
    $conn=connect();
$requette="SELECT * FROM produits WHERE nom LIKE '%$keywords%' ";
$resultat=$conn->query($requette);
$produits=$resultat->fetchAll();
return $produits;
}
function getProduitsById($id){
    $conn=connect();
    $requette="SELECT * FROM produits WHERE id=$id";
    $resultat=$conn->query($requette);
    $produit=$resultat->fetch();
    return $produit;
}
function addVisteur($data){
    $conn=connect();
    $requette="INSERT INTO visiteur(nom,email,prenom,mp,telephone) VALUES ('".$data["nom"]."','".$data["email"]."','".$data["prenom"]."','".$data["mp"]."','".$data["telephone"]."')";
    $resultat=$conn->query($requette);
    if($resultat){
        return true;
    }else{
        return false;
    }
}

?>