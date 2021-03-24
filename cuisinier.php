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
    <?php
        
        include("navbar.php");    
    
    ?>
   <!--fin de la navBar-->
   <section class="plat contenaire border border-dark">
        <h1>CUISINIER</h1>
          <section class="platOne row">
              <article class=" CardUno col-6 ">
                <div class="card " style="width: 18rem;">
                    <img src="images/cuisinier1.jpg" class="card-img-top" height= "300px" alt="...">
                    <div class="card-body  bg-dark text-danger">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
              </article>
              <!---->
              <article class=" CardDos col-6">
                <div class="card" style="width: 18rem;">
                    <img src="images/cuisinier2.jpg" class="card-img-top" height= "300px" alt="...">
                    <div class="card-body  bg-dark text-danger">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>  
              </article>
          </section>
          <!--fin du menu 1 / 1,2  -->
          <section class="platTwo row">
            <article class=" CardTresse col-6">
                <div class="card" style="width: 18rem;">
                    <img src="images/cuisinier3.jpg" class="card-img-top" height= "300px" alt="...">
                    <div class="card-body  bg-dark text-danger">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </article>
            <!---->
            <article class="  col-6">
                <div class=" CardQuatro card" style="width: 18rem;">
                    <img src="images/cuisinier4.jpg" class="card-img-top" height= "300px" alt="...">
                    <div class="card-body  bg-dark text-danger">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>                                
            </article>
         <!--fin du menu 2 /  3,4  -->
      </section>
     </section>  
    <!--fin de la partie menu -->
    <?php
        
        include("footer.php");    
    
    ?>
</body>
</html>