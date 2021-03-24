<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap icone-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
     <!--font google -->
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <title>Document</title>
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
   <section class="plan border border-dark">
        <h1 class="mb-3">RESTAURANT</h1>
        <article class="carte">
            <img src="images/tour.png" alt="">
        </article>
        <!---->
        <article class="adresse bg-dark text-danger rounded border border-warning ">
          <h2>ADRESSE</h2>
           <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo quis illo quibusdam enim consequatur odio harum accusantium nulla quam, repellendus sed eos ipsa possimus! Sapiente dolor nulla perspiciatis culpa dolore?</p>
           <p><i class="bi bi-geo-alt-fill"></i></p>
        </article>
        <!---->
        <article class="horaire bg-dark text-danger rounded border border-warning ">
          <h2>HORAIRE</h2>
         <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente dolores dolorem dolorum iure odit, molestias deleniti, deserunt praesentium esse perferendis, quis illum ipsa veritatis fugit perspiciatis distinctio officia minus ipsum?</p>
         <p><i class="bi bi-calendar-check"></i></p>
        </article>
      </section>
      <!-- fin du plan , l'adresse et du plan de la carte-->
      <?php
        
        include("footer.php");    
    
      ?>
</body>
</html>