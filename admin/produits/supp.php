<?php 

$idproduit = $_GET['idp'] ;

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

  $requette = "DELETE FROM produits WHERE id='$idproduit' " ;

  $resultat = $conn->query($requette);

  if($resultat){
      header("location:liste.php?delete=ok");
  }




?>