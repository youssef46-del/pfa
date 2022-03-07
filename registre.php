<?php

error_reporting(0);
session_start();


if(isset($_SESSION['nom'])){ 

  header("location:profile.php");

}



include "include/functions.php" ;
$RegistrationAlert = 0 ;
$categories=getAllcategories(); 

if(!empty($_POST)){     //click sur sauvegarder

    if(AddVisiteur($_POST)){
      $RegistrationAlert = 1 ;

      
    }
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.4/sweetalert2.min.css">
  </head>
<body>
    
    <?php
        include "include/header.php";

      ?>

        <br> <br>
      
        
         <div class="col-12 p-5">

        <h1 class="text-center">Registre</h1> <br><br>
        <form action="registre.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nom</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="nom" required>
              </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="prenom" required>
              </div>
            
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Telephone</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="telephone" required>
              </div>
           
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            
            <button type="submit" class="btn btn-primary">Sauvgarder</button>
          </form>
        </div>

      


        <!-- footer -->
      
      <div class="bg-dark text-center p-5 mt-4">
        <p class="text-white">
          tous les droits sont reservées .. @Beldi_Market @2022
        </p>  
      </div>

   
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.4/sweetalert2.all.min.js" ></script>

<?php

if($RegistrationAlert == 1 ){



print " <script>
Swal.fire({
position: 'top-end',
icon: 'success',
title: 'Creation du compte avec succes',
showConfirmButton: false,
timer: 3000
})
</script> " ;

}

?>




</html>