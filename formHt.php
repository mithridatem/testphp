<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcul TVA</title>
</head>
<body>
    <h3>Calculer le prix TTC:</h3>
    <form action="" method="post">
        <p>Saisir le prix HT :</p>
        <p><input type="text" name="prixHt"></p>
        <p>Saisir la quantité :</p>
        <p><input type="text" name="qtx"></p>
        <p>Saisir la tva : (saisir 1.2 pour 20%)</p>
        <p><input type="text" name="tva"></p>
        <p><input type="submit" value="calculer" name="calculer"></p>
    </form>
    <p id="result"></p>
</body>
</html>