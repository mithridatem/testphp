<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3></h3>
    <form action="" method="get">
        <p><input type="text" name="nom"></p>
        <p><input type="text" name="prenom"></p>
        <p><input type="submit" value="ajouter" name="submit"></p>
    </form>
</body>
</html>
<?php
    //test si le bouton à été cliqué
    if(isset($_GET['submit'])){
        //tester si les champs sont remplis
        if(!empty($_GET['nom']) AND !empty($_GET['prenom'])){
            echo '<p>Le compte '.$_GET['prenom'].' a été ajouté</p>';
        }
        else{
            echo '<p>Veuillez remplir tous les champs</p>';
        }
    }
    //test bouton non cliqué
    else{
        echo '<p>Pour ajouter un utilisateur 
        cliquez sur le bouton ajouter</p>';
    }
?>