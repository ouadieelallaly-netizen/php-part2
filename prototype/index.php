<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
     <label >nom</label>
     <input type="text" name="nom"><br>
     <label >email</label>
     <input type="email" name="email"><br>
     <label >massage</label>
     <input type="text" name="message"><br>
       <button type="submit">Envoyer</button>
    </form>
</body>
</html>

<?php

    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

  if( $_SERVER["REQUEST_METHOD"]==="Get"){
    $nom= trim($_GET['nom']);
    $email = trim($_GET['email']);

    if (empty($nom) || empty($email) || empty($message)){
        echo "tous les champs sont obligatoires" ;
    }
        elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "email invalide" ;
        }

    else{
       echo "bonjour $nom,votre email est $email" ;
    }
}
 
?>