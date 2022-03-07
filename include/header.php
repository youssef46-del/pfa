



<nav class="navbar navbar-expand-lg navbar-light" style="background-color:rgb(92, 225, 230);">
        <div class="container-fluid" >
        <a class="navbar-brand" href="index.php" ><img src="images/beldi Market (1).png" style="height: 110px; width: 190px;" alt="" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
              
              <li class="nav-item dropdown">
              <button type="button" class="btn btn-info">Categories</button>
                <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split me-4" data-bs-toggle="dropdown" aria-expanded="false">
                 <span class="visually-hidden">Toggle Dropdown</span>
                 </button>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                <?php 
                
                  foreach($categories as $categorie){
                    print '<li><a class="dropdown-item" href="#">'.$categorie['nom'].'</a></li> ';
                  }
                
                ?>

                  </ul>

                  <?php

                  if ( isset($_SESSION['nom']) ){
                        print '<li class="nav-item">
                        <a class="btn btn-outline-primary me-4" aria-current="page" href="profile.php">Profile</a>
                      </li>' ;
                  }else{

                    print ' <li class="nav-item">
                    <a class="btn btn-outline-primary me-4" aria-current="page" href="connexion.php">Connexion</a>
                  </li>
                  <li class="nav-item">
                    <a class="btn btn-outline-primary me-4" aria-current="page" href="registre.php">Inscription</a>
                  </li> ';
                  }

                  ?>

                  
              
            </ul>
            <form class="d-flex" action="index.php" method="POST" >
              <input class="form-control me-3" type="search" placeholder="chercher ici ..." aria-label="Search" name="search">
              <button class="btnS"  type="submit me-4">recherche</button>
            </form>

              <?php
              
              if(isset($_SESSION['nom'])){
                print ' <a class="btn btn-primary ml-4" href="index.php" > Deconnexion </a> ' ;
              }
              ?>

          </div>
        </div>
      </nav>