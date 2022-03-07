<?php

session_start();

include "include/functions.php" ;

$categories=getAllcategories(); 

//

if(!empty($_POST)){  // clicker sur 'RECHERCHER'
  $produits = searchProduits($_POST['search']);
  //echo $_POST['search'];
}else{
  $produits = getAllproduits();
}

//



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-SHOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css" >
</head>
<body class="body">
    
      <?php
        include "include/header.php";

      ?>



    <section class="main">
      <div  class="container py-5">
        <div  class="row py-8">
          <div  class="col-lg-7 pt-8 text-center">
              <h1 class="pt-5"></h1>
       <!--       <button class="btn1 mt-3"> ... </button>  -->
          </div>
        </div>
      </div>
    </section>   



    

    

    

         
      <div class="row col-12 p-4"> 
      
      <?php

foreach($produits as $produit){

  print '<div class="row col-3 p-5 " > 
  <div class="card" style="width: 18rem; ">
  <img src="images/'.$produit['image'].'" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">'.$produit['nom'].'</h5>
    <p class="card-text">'.$produit['description'].'</p>
    <a href="produit.php?id='.$produit['id'].'" class="btn btn-primary">Afficher</a>
  </div>
</div></div>   ';
}



?>




 
      </div>




      <!-- footer -->

      <div class="bg-dark text-center p-5 mt-4">
        <p class="text-white">
          tous les droits sont reservées .. @Beldi_Market @2022
        </p>  
      </div>
        
        
        

      

   
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>