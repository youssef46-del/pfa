
<?php

error_reporting(0);
session_start();

include "../../include/functions.php" ;

$categories = getAllcategories() ;


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Profile : Admin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">BELDI SHOP</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="chercher" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="../../deconnexion.php">Deconnexion</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link " href="#">
                  <span data-feather="home"></span>
                  Acceuil <span class="sr-only">(courant)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="file"></span>
                  Categories
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../produits/liste.php">
                  <span data-feather="shopping-cart"></span>
                  Produits
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  clients
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Rapports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="../profile.php">
                  <span data-feather="layers"></span>
                  Profile
                </a>
              </li>
            </ul>

            
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Liste des categories</h1>

            <div class="btn-toolbar mb-2 mb-md-0">
              
           
             <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Ajouter</a>
            

            


            </div>

          </div> <br> <br> <br> <br>

          <div>
                     <!-- liste start -->

            <?php 
                if(isset($_GET['ajout']) && $_GET['ajout'] == 'ok' )  {
                        
                    print " <div class='alert alert-primary'>
                    nouvelle categorie ajoutée avec success .
                </div> " ;

            }
            
            
            ?>

            <?php 
                if(isset($_GET['delete']) && $_GET['delete'] == 'ok' )  {
                        
                    print " <div class='alert alert-danger'>
                     Categorie supprimée avec success !
                </div> " ;

            }
            
            
            ?>

<?php 
                if(isset($_GET['modification']) && $_GET['modification'] == 'ok' )  {
                        
                    print " <div class='alert alert-success'>
                     Categorie modifiée avec success !
                </div> " ;

            }
            
            
            ?>

            <br> <br>


            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php 

    $i=0 ;
    foreach($categories as $c){
    $i++ ;    
        print ' <tr>
        <th scope="row">'.$i.'</th>
        <td>'.$c['nom'].'</td>
        <td>'.$c['description'].'</td>
        <td>
            <a  class="btn btn-success" data-toggle="modal" data-target="#editModal'.$c['id'].'" >Modifier</a>
            <a  onClick="return popUpDeleteCategorie()"   href="supp.php?idc='.$c['id'].' " class="btn btn-danger">Supprimer</a>
        </td>
      </tr> ';

    }

    ?>

    
    
  </tbody>
</table>


  


            </div>
          
          
        </main>
      </div>
    </div>


   

<!-- Modal por ajouter -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Categorie </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

       <form action="ajout.php" method="POST" >

            <div class="form-group" >
                <input type="text" name="nom" class="form-control" placeholder="nom de categorie ...">
            </div>

            <div class="form-group" >
                <textarea name="description" class="form-control" placeholder="description de categorie ..."></textarea>
            </div>

      </div>
      <div class="modal-footer">
        
        <button type="submit" class="btn btn-primary">Ajouter </button>
      </div>
     </form>
    </div>
  </div>
</div>


<?php 

foreach($categories as $index => $categorie){  ?>

<!-- Modal modification -->
<div class="modal fade" id="editModal<?php echo $categorie['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier Categorie </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

       <form action="modifier.php" method="POST" >
       <input type="hidden" value="<?php echo $categorie['id'] ; ?>" name="idc" /> 

            <div class="form-group" >
                <input type="text" name="nom" class="form-control" value="<?php echo $categorie['nom'] ; ?>" placeholder="nom de categorie ...">
            </div>

            <div class="form-group" >
                <textarea name="description" class="form-control" placeholder="description de categorie ..."> <?php echo $categorie['description'] ; ?> </textarea>
            </div>

      </div>
      <div class="modal-footer">
        
        <button type="submit" class="btn btn-primary">Modifier </button>
      </div>
     </form>
    </div>
  </div>
</div>


<?php

}

?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>
    
    <script>

    function popUpDeleteCategorie(){

        return confirm("Voulez-vous vraiment supprimer la categorie ?");
    }

    </script>

  </body>
</html>
