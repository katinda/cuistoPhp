<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--font google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!--link css-->
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/pizza1.jpg" class="d-block w-100" height="400px" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/pizza2.jpg" class="d-block w-100" height="400px" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/pizza3.jpg" class="d-block w-100" height="400px" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
      <!--fin du carousel-->
        <?php
        
            include("navbar.php");    
        
        ?>
       <!--fin de la navBar-->
       <section class="proEv border border-dark">
       <h1 class="Acueil">ACCUEIL</h1>
      <section class="promo container">
        <div class=" jumbotron jumbotron-fluid
        bg-dark text-danger rounded border border-warning ">
            <div class="container">
              <h2 class="display-4">EVENEMENT</h2>
              <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
            </div>
          </div>
      </section>
      <!--fin du jambotron promo-->
      <section class="evenement container">
        <div class="jumbotron jumbotron-fluid bg-dark text-danger rounded border border-warning">
            <div class="container">
              <h2 class="display-4">PROMOTION</h2>
              <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
            </div>
          </div>
      </section>
     </section>
      <!--fin du jambotron evenement-->
      <?php
        
            include("footer.php");    
        
     ?>
    
</body>
</html>