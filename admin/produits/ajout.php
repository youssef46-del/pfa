<?php

session_start();

$nom = $_POST['nom'] ;
$desc = $_POST['description'] ;
$prix = $_POST['prix'] ;
$createur = $_SESSION['id'] ;
$categorie = $_POST['categorie'] ;




$target_dir = "../../images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    $image = $_FILES["image"]["name"] ;
  } else {
    echo "Désolé , ERREUR !!";
  }

$date_creation = date("Y-m-d") ;



$servername="localhost";
$DBuser="root";
$DBpassword="";
$DBname="eshop";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }


//requette
$requette="INSERT INTO produits(nom,description,prix,image,createur,categorie,date_creation)
                   VALUES ('$nom','$desc','$prix','$image','$createur','$categorie','$date_creation') ";

//exec
$resultat = $conn->query($requette) ;

if($resultat){
    header ("location:liste.php?ajout=ok");
}



?>