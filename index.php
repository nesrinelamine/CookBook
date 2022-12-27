<?php

    include "connect.php";
 
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookbook</title>
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
            <a class="nav-link active" aria-current="page" href="index.php ">Acceuil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="recettes.php">Recettes</a>
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
        <div class="btn-group" role="group" aria-label="Basic example" style="margin-right: 3rem; " >
        <?php if(isset($_SESSION['username']))  {  ?>

          <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
         <p><a href="logout.php">Logout</a></p>



        
        <?php  } else {  ?>
          <a href="login.php">
        <button type="button" class="btn btn-primary"  style="height=3rem;">Connexion</button>
        </a>
        <a href="registration.php">
        <button type="button" class="btn btn-primary" style="height=3rem;">Inscription</button>
        </a>
         <?php   } ?>

        </div>
    </div>

      </div>
    </div>
  </nav>

<section class="searchbox">
  <div class="input-group-searchbox" style="height: 3.1rem;display: flex;justify-content: center;align-items: center;
  margin-top: 3rem;    flex-wrap: wrap;align-content: stretch;">
    <div class="form-outline">
      <input type="search" id="form1" class="form-control" style="width: 23rem;height: 2.7rem;"/>
   </div>
    <button type="button" class="btn btn-primary">
      <span class="material-symbols-outlined">
        search
      </span>
    </button>

    <div class="input-group mb-3">
      <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#"> Ingeridients</a></li>
        <li><a class="dropdown-item" href="#">Duree</a></li>
        <li><a class="dropdown-item" href="#">Calories</a></li>
      </ul>
     </div>
  </div>
  
</section>

<section class="categories">
  <h1 style=" margin-left: 3rem; margin-top: 2rem;"> Catégories : </h1>
  <div class="row row-cols-1 row-cols-md-3 g-4" style="width: 70rem; margin-left: 2rem; margin-top: 2rem;">

  <?php

$stmt = $con->prepare("Select * from categorie_plat");
$stmt->execute();
$rows = $stmt->fetchAll();
$count = $stmt->rowCount();

$x = 1;

foreach($rows as $row)
{
    if($x == 1)
    {
        ?>
        <div class="col<?php  echo $x; ?>">
        <a href="recettes.php?categorie_id=<?php echo $row['categorie_id'];?>"> 
          <div class="card salty" style="width: 70%;">
            <img src=".<?php  echo $row['image_recettes'];?>" class="card-img-top" style="width:50%;margin-left: 2.5rem; margin-top: 1rem;">
            <div class="card-body" style="margin-right: 0.1rem;">
              <h5 class="card-title"><?php  echo $row['categorie_name'];?></h5>
            </div>
          </div>
          </a>
          </div>

         <?php
    }
    else
    {

        ?>
    

           <div class="col <?php  echo $x; ?>">
           <a href="recettes.php?categorie_id=<?php echo $row['categorie_id'];?>"> 
            <div class="card salty" style="width: 70%;">
              <img src=".<?php            echo $row['image_recettes'];?>" class="card-img-top" style="width:50%;margin-left: 2.5rem; margin-top: 1rem;">
              <div class="card-body" style="margin-right: 0.1rem;">
                <h5 class="card-title"><?php    echo $row['categorie_name'];?></h5>
              </div>
            </div>
            </a>
            </div>

          <?php
    }

    $x++;
     
}
?>
            </div>


</section>

<section class="popular recepies" >
  <div class="popular-recepies-section " style="margin-top: 3rem; width: 90%; margin-left: 4rem;">
    <h1 style=" margin-left: 0.5rem; margin-top: 4rem; margin-bottom: 3rem;"> Recettes Populaires :
    </h1>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
  
      </div>
  
      <div class="carousel-inner" style="box-shadow: 0 1rem 4rem rgba(0, 0, 0, 0.4);
      border-radius: 0.5rem;" >
        <div class="carousel-item active" data-bs-interval="10000">
          <div class="popular-img">
            <a href="rouleauxpesto.html">
            <img src="Pesto Lasagna Rolls.jpeg" class="d-block w-100">
          </a>
          </div>
          <div class="carousel-caption d-none d-md-block" style="bottom: 24.25rem;">
            <h2 style="font-family:'Solway', serif; font-weight: 500;">Rouleaux de lasagne au pesto</h2>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
  
        <div class="carousel-item" data-bs-interval="2000">
          <div class="popular-img">
            <a href="lavacake.html">
            <img src="Chocolate lava cake.jpeg" class="d-block w-100" alt="...">
          </a>
        </div>
          <div class="carousel-caption d-none d-md-block" style="bottom: 14.25rem;" >
            <h2 style="font-family:'Solway', serif; font-weight: 500;">Gâteau de Lave au chocolat</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
  
        <div class="carousel-item" data-bs-interval="3000">
          <div class="popular-img">
            <a href="limonade.html">
            <img src="Whipped Lemonade.jpg" class="d-block w-100" alt="...">
          </a>
          </div>
          <div class="carousel-caption d-none d-md-block" style="bottom: 11.25rem;">
            <h2 style="font-family:'Solway', serif; font-weight: 500;">Limonade fouettée</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
  
        <div class="carousel-item " data-bs-interval="40000">
          <div class="popular-img">
            <a href="pouletmarsalla.html">
            <img src="Chicken Marsala.jpeg" class="d-block w-100" alt="">
          </a>
          </div>
          <div class="carousel-caption d-none d-md-block" style="bottom: 24.25rem;">
            <h2 style="font-family:'Solway', serif; font-weight: 500;">Poulet Marsala</h5>
            <p>Some representative placeholder content for the fourth slide.</p>
          </div>
  
        </div> 
         <div class="carousel-item" data-bs-interval="50000">
           <div class="popular-img">
             <a href="coconutcake.html">
            <img src="Coconut Cake.jpeg" class="d-block w-100" alt="...">
          </a>
           </div>
          <div class="carousel-caption d-none d-md-block" style="bottom: 24.25rem;">
            <h2 style="font-family:'Solway', serif; font-weight: 500;">Un gâteau à la noix de coco</h2>
            <p>Some representative placeholder content for the fifth slide.</p>
          </div>
  
        </div>  
  
        <div class="carousel-item">
          <div class="popular-img">
            <img src="Red Velvet Cheesecake Milkshake.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-caption d-none d-md-block" style="bottom: 19.25rem;">
            <h2 style="font-family:'Solway', serif; font-weight: 500;"> Milk-shake au Red Velvet Cheesecake</h2>
            <p>Some representative placeholder content for the sixth slide.</p>
          </div>
        </div>
    
      </div>
  
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  
  </div>
  
</section>
<section class="contact">
  <div class="contact-wrapper">
    <div class="contact-left"></div>
    <div class="contact-right">
      <h1 class="contact-heading"></h1>
      <form style="margin-top: -4rem;"> 
        <div class="input-group">
          <input type="text" class="field" />
          <label class="input-label">Nom et Prénom</label>
        </div>
        <div class="input-group">
          <input type="email" class="field" />
          <label class="input-label">Email</label>
        </div>
        <div class="input-group" style="margin-top: -3rem;">
          <textarea class="field"></textarea>
          <label class="message">Message</label>
        </div>
  
        <input type="submit" class="submit-btn" value="Submit" />
      </form>
    </div>
  </div>
</section>

<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><a href="#"> <i class="fab fa-facebook"></i></a>
</i
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
  

    
</body>
</html>