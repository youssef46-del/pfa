<?php 

//error_reporting(0);
session_start();


//recuperation des donnees du formulaire
$id = $_POST['idc'] ;

$nom = $_POST['nom'] ;
$desc = $_POST['description'] ;

$date_modification = date("Y-m-d") ;

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
$requette="UPDATE categories SET nom='$nom' , description='$desc' , date_modification='$date_modification'
              WHERE id='$id'  ";

//exec
$resultat = $conn->query($requette) ;

if($resultat){
    header ("location:liste.php?modification=ok");
}




?>