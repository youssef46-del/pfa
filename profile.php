 <?php 

session_start();


if(!isset($_SESSION['nom'])){ 

    header("location:connexion.php");

}





?>
 
 
 
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <title>Profile</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 </head>
 <body>

    <?php

        include "include/header.php" ;


        ?>

    <div class="container p-5">

     <h1>Bienvenue <span class="text-primary">  <?php echo $_SESSION['nom'] .' '. $_SESSION['prenom'] ; ?> </span></h1>
     <h3>Email : <span class="text-primary">  <?php echo $_SESSION['email'] ;  ?> </span></h3>
     <h4>Telephone : <span class="text-primary">  <?php echo $_SESSION['telephone'] ; ?> </span></h4>



    <!-- <a class="btn btn-primary" href="deconnexion.php"> Deconnexion </a>  -->

    </div>




     <!-- footer 

     <div class="bg-dark text-center p-5 mt-4">
        <p class="text-white">
          tous les droits sont reservées .. @Beldi_Market @2022
        </p>  
      </div> -->

 </body>




 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 </html>