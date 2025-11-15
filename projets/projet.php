<?php

if (isset($_GET["projetID"])) {
    $string = file_get_contents("../data/projets.json");
    $projets = json_decode($string, true);
    $projet = $projets[$_GET["projetID"]];
    //var_dump($projet);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $projet ?></title>
    <link rel="stylesheet" href="./projets.css">
    <link rel="stylesheet" href="../css/global.css">
</head>
<body>

    <header>
        <h1>Krumb Simon</h1>
        <h2>Étudiant BUT Informatique</h2>
    </header>

    <nav>
        <ul>
            <li class="current"><a href="../">Accueil</a></li>
            <!-- <li><a href="./index.php">Mon travail</a></li> -->
            <li><a href="../qui-suis-je/">Qui suis-je?</a></li>
            <li><a href="../contact/">Contact</a></li>
        </ul>
    </nav>
    <!-- changer le json en BD, avec des dates -->
    <article>
        <?php if (isset($_GET["projetID"])): ?>
            <h1><?php echo $projet["nom"]?></h1>

            <section>
                <h3> Résumé du projet </h3>
                <ul>
                    <?php foreach ($projet["resume"] as $key => $value): ?>
                    <li><? echo $value?></li>
                    <?php endforeach ?>
                    <li><? echo "Travail fait en groupe de ".$projet["tailleGroupe"] ?></li>
                </ul>
            </section>
            <section>
                <button id="toggle-competence" class="competence-toggle" aria-expanded="false"><h3>Competence mises en place</h3></button>
                <ul class="competence">
                    <div>
                    <?php foreach ($projet["competences"] as $key => $value): ?>
                        <?php if ($value == "") : ?>
                            </div>
                            <div>
                        <?php else : ?>
                            <li><? echo $value?></li>
                        <?php endif ?>
                    <?php endforeach ?>
                    </div>
                </ul>
            </section>


        <?php endif ?>
    </article>
    <script src="./script.js"></script>
</body>
</html>