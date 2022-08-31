<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
</head>
<body>
    <h3>Inscription :</h3>
    <form action="" method="post">
        <p>Saisir votre nom :</p>
        <p><input type="text" name="nom"></p>
        <p>Saisir votre prénom :</p>
        <p><input type="text" name="prenom"></p>
        <p>Saisir votre login :</p>
        <p><input type="text" name="login"></p>
        <p>Saisir votre mail :</p>
        <p><input type="email" name="mail"></p>
        <p>Saisir votre password :</p>
        <p><input type="password" name="password"></p>
        <p>Saisir votre date de naissance :</p>
        <p><input type="date" name="date"></p>
        <p>Cocher si admin :</p>
        <p><input type="checkbox" name="admin"></p>
        <p><input type="submit" value="ajouter" name="submit"></p>
    </form>
</body>
</html>
<?php
    $tab =['Lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'Samedi', 'Dimanche'];
    //clic sur le bouton
    if(isset($_POST['submit'])){
        
        //test si les champs sont remplis
        if(!empty($_POST['nom']) AND !empty($_POST['prenom']) 
        AND !empty($_POST['login']) AND !empty($_POST['date']) 
        AND !empty($_POST['mail']) AND !empty($_POST['password'])){
            //test si la case est cochée (elle existe)
            if(isset($_POST['admin'])){
                $date = new DateTime($_POST['date']);
                echo '<p>le compte admin '.$_POST['mail'].' 
                a été ajouté le : '.$tab[$date->format('N')-1].' '.$date->format('d-n-Y').'</p>';
            }
            //test si elle n'est pas cochée (elle n'existe pas)
            else{
                $date = new DateTime($_POST['date']);
                echo '<p>le compte '.$_POST['mail'].' 
                a été ajouté le : '.$tab[$date->format('N')-1].' '.$date->format('d-n-Y').'</p>';
            }
        }
        //test si les champs sont vides
        else{
            echo '<p>Veuillez remplir tous les champs</p>';
        }
    }
    //test si le bouton n'est pas cliqué
    else{
        echo '<p>Pour ajouter un utilisateur 
        cliquez sur le bouton ajouter</p>';
    }
?>
