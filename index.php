<?php 

require_once('./config/config.php');  

$currentCity = "Fécamp";

if(isset($_GET['ville']) && !empty($_GET['ville'])) {
    $currentCity = $_GET['ville'];
}




?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attractivité</title>
    <!-- lien de bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- lien vers le css -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <header class="container-fluid">
        <h1>Attractivité par ville</h1>
    </header>
    <section class="infos container">
        <form method="get">
            <select name="ville">
                    <?php foreach($villes as $ville) : ?>
                        <option value=<?= $ville['nom'] ?>><?= $ville['nom'] ?></option>
                    <?php endforeach; ?>
            </select>
            <button type="submit">Valider</button>
        </form>
        <div class="row">
            <div class="col first"><h3 class="d-flex justify-content-center">Ville : <?= $villes[$currentCity]['nom'] ?></h3></div>
            <div class="col first"><h3 class="d-flex justify-content-center">Nombre d'habitants : <?= $villes[$currentCity]['habitants'] ?></h3></div>
        </div>
        <div class="row">
            <div class="col">
                <h5>Frequentation mensuelle :</h5>
                <p><?= $villes[$currentCity]['fréquentation mensuelle'] ?> visiteurs</p>
            </div>
            <div class="col">
                <h5>Taux d'attractivité dans l'agglomération :</h5>
                <p><?= $villes[$currentCity]["taux d'attractivité dans l'agglo"] ?> des habitants de l'agglo touchés</p>
            </div>
            <div class="col">
                <h5>Part de visiteurs extérieurs :</h5>
                <p><?= $villes[$currentCity]['Part de visiteurs extérieurs'] ?> de visiteurs extérieurs</p>
            </div>
        </div>
    </section>
</body>
</html>