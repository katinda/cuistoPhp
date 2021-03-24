   <?php

session_start();
    try
    {
      $bdd = new PDO('mysql:host=localhost;dbname=cuisto;charset=utf8', 'root', 'root');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

    if(isset($_POST['save'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prénom'];
        $mail = $_POST['mail'];
        $textarea = $_POST['textarea'];

        $bdd ->query("INSERT INTO data (nom,prénom,mail,textarea) VALUES ('$nom','$prenom','$mail','$textarea')");
        
        echo " Tout a bien été ajouté !";

        $_SESSION['message'] = "Record has been saved !";
        $_SESSION['msg_type'] = "success";

        header("location: contact.php");
    }

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $bdd->query("DELETE FROM data  WHERE id=$id");
    
        $_SESSION['message'] = "Record has been deleted !";
        $_SESSION['msg_type'] = "danger";
    
        header("location: contact.php");
    }


    ?>