<?php 

//error_reporting(0);
session_start();


//recuperation des donnees du formulaire
$nom = $_POST['nom'] ;
$desc = $_POST['description'] ;
$createur = $_SESSION['id'] ;
$date_creation = date("Y-m-d") ;

//DBconn

// include "../../include/functions.php" ;

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
$requette="INSERT INTO categories(nom,description,createur,date_creation)
                   VALUES ('$nom','$desc','$createur','$date_creation') ";

//exec
$resultat = $conn->query($requette) ;

if($resultat){
    header ("location:liste.php?ajout=ok");
}




?>