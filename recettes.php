<?php

    include "connect.php";
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recepies</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Lato:ital@0;1&family=Solway:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body >
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid navbar">
      <nav class="navbar bg-light">
        <div class="container navbar">
          <a class="navbar-brand" href="#">
            <img src="logo cookboo1k_.png" class="img-responsive" width="190" height="180">
          </a>
        </div>
      </nav>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Acceuil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Recettes</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Bibliothèque
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Vos favoris</a></li>
              <li><a class="dropdown-item" href="#"> Vos collections</a></li>
              <li><a class="dropdown-item" href="#">Vos recettes</a></li>
            </ul>
       
     
        </ul>
        <form class="row g-3" style="margin-right: 1rem;">
          <div class="col-auto">
            <label for="exampleFormControlInput1" class="visually-hidden">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
          </div>
          <div class="col-auto">
            <label for="inputPassword2" class="visually-hidden">Mot De Passe </label>
            <input type="password" class="form-control" id="inputPassword2" placeholder="Mot De Passe">
          </div>
          <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Connexion
            </button>
          </div>
        </form>
      </div>
    </div>
  </nav>
  
 

  <section class="Recepies">
    <h1 class="section-heading-recette">Galerie De Recettes </h1>
    <div class="gallery">


    <?php 
    
    if(isset($_GET['categorie_id'])) {
      $id=$_GET['categorie_id'];
      $stmt_menus = $con->prepare("Select * from recettes where categorie_id = ?");
      $stmt_menus->execute(array($id));
   }
   else {
        $stmt_menus = $con->prepare("Select * from recettes");
        $stmt_menus->execute();
      }
      
        
        
        $rows_menus = $stmt_menus->fetchAll();
$x=0;
        if($stmt_menus->rowCount() == 0)
        {
            echo "<div style='margin:auto'>No Available Menus for this category!</div>";
        }

        if($stmt_menus->rowCount() != 0)
        {
           
            foreach($rows_menus as $menu)
            {
                ?>
                <a href="#" class="gallery-link" title="Order Now">
                <img src=".<?php  echo $menu['recette_img'];?>" class="food-img" />
                <h3 class="food-name"> <?php  echo $menu['recette_name'];?> </h3>
                <button class="card-btn">
                    <span class="material-symbols-outlined" style="margin-right: 0.5rem;margin-bottom: 0.5rem;">
                        menu_book
                        </span>Recette</button>
    
                  </button>
      
            </a>
<?php 

}        }

 
     

?>
    </div>
</section>
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><link href='https://css.gg/facebook.css' rel='stylesheet'>
        ></a>
  
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-google"></i
        ></a>
  
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-instagram"></i
        ></a>
  
        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>
  
        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>






























  