<?php



function getAllcategories(){

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
    
      //
    $requette = "SELECT * from categories"; // req
    
    $resultat = $conn->query($requette); // exec du req
    
    $categories = $resultat->fetchAll(); // resultat

    return $categories;

  }


  function getAllproduits(){
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
      //
      $requette = "SELECT * from produits";
    
      $resultat = $conn->query($requette);
      
      $produits = $resultat->fetchAll();
  
      return $produits;

  }


  function searchproduits($words){
    $servername="localhost";
    $DBuser="root";
    $DBpassword="";
    $DBname="eshop";
    
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully" ;
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
      //

      $requette="SELECT * FROM produits WHERE nom LIKE '%$words%' ";

      $resultat = $conn->query($requette);

      $produits = $resultat->fetchAll();
  
      return $produits;



  }


  function getProduitByID($id){
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
      //

      $requette = " SELECT * FROM produits WHERE id=$id " ;

      $resultat = $conn->query($requette);

      $produit = $resultat->fetch();

      return $produit; 


  }



 function AddVisiteur($data){

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
      //
      
      $passwordhash= md5($data['password']);
      $requette = "INSERT INTO visiteurs(nom,prenom,email,password,telephone) 
                VALUES ('".$data['nom']."','".$data['prenom']."','".$data['email']."','".$passwordhash."','".$data['telephone']."') ";
      
      $resultat = $conn->query($requette) ;

      if($resultat){
          return true ;
      }else{
          false ;
      }
}


function connectVisiteur($data){

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
      //

      $passwordhash= md5($data['password']);
      $requette = "SELECT * FROM visiteurs WHERE email='".$data['email']."' 
                                            AND password='".$passwordhash."' ";
      
      $resultat = $conn->query($requette);

      $user = $resultat->fetch();

      return $user ; 

}


function connectAdmin($data){
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
    //

    
    $requette = "SELECT * FROM administrateur WHERE email='".$data['email']."' 
                                          AND password='".$data['password']."' ";
    
    $resultat = $conn->query($requette);

    $user = $resultat->fetch();

    return $user ; 
}









?>