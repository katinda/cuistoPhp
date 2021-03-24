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

<?php include ('process.php');?>

<?php
    
    if(isset($_SESSION['message'])): ?>

<div class="alert alert-<?=$_SESSION['msg_type']?>">

        <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?>
    </div>
    <?php endif ?>
    <?php
    try
    {
      $bdd = new PDO('mysql:host=localhost;dbname=cuisto;charset=utf8', 'root', 'root');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

    $result=$bdd ->query("SELECT * FROM data");

  
    //pre_r($result->fetch());
    //pre_r($result->fetch());

    ?>
    <?php
    
    function pre_r($array){
      echo '<pre>';
      print_r($array);
      echo '</pre>';
  }

    ?>

<div class="row justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>mail</th>
                    <th>textarea</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
    <?php
        while ($row = $result->fetch()):
    ?>
            <tr>
                <td> <?php echo $row['nom'];?></td>
                <td><?php echo $row['prénom'];?></td>
                <td><?php echo $row['mail'];?></td>
                <td><?php echo $row['textarea'];?></td>
                <td>
                    <a href="contact.php?edit=<?php echo $row['id'];?>" 
                        class="btn btn-info">Edit</a>
                    <a href="process.php?delete=<?php echo $row['id'];?>" 
                        class="btn btn-danger">delete</a>    
                </td>
            </tr>
        <?php endwhile;?>    
        </table>
    </div>



    <!--fin de la  base de donnée -->
    <?php
        
        include("navbar.php");    
    
    ?>
     <!--fin de la navBar-->
          <section class="Pform border border-dark">
          <h1 class="mb-3">CONTACT</h1>
          <section class="form border border-warning">
          <form action="process.php" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Prénom</label>
                <input type="text" name="prenom" class="form-control" id="exampleFormControlInput1" placeholder="firstname">
              </div>
              <!---->
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control" id="exampleFormControlInput1" placeholder="name">
              </div>
              <!---->
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="text" name="mail" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <!---->
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea type="text" name="textarea"  class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <!---->
              <button type="submit" class=" bouttonContact btn btn-primary" name="save">Submit</button>
          </form>
        </section>
      </section>

      <?php
        
        include("footer.php");    
    
      ?>

    
</body>
</html>