<?php
// Charger le fichier JSON
$json = file_get_contents("../data/projets.json");
$projects = json_decode($json, true);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Projets</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="./project.css">
</head>
<body>
    <header>
        <h1>Krumb Simon</h1>
        <h2>Mes Projets</h2>
    </header>

    <nav>
        <ul>
            <li><a href="../">Accueil</a></li>
            <li class="current"><a href="../projets/">Mon travail</a></li>
            <li><a href="../qui-suis-je/">Qui suis-je?</a></li>
            <li><a href="../contact/">Contact</a></li>
        </ul>
    </nav>

    <main>
        <div>
            <?php foreach ($projects as $key => $proj): ?>
                <article id="<?= htmlspecialchars($key) ?>">
                    <a href="#<?= htmlspecialchars($key) ?>">
                        <div>
                            <h3>krumb@simon:~/ls "<?= htmlspecialchars($proj["nom"]) ?>_"</h3>
                            <p>total <?= count($proj["resume"]) ?></p>
                            <br>
                            <p>Travail en groupe de <?= htmlspecialchars($proj["tailleGroupe"]) ?></p>
                            <br>
                            <ol>
                                <?php foreach ($proj["resume"] as $r): ?>
                                    <li><?= htmlspecialchars($r) ?></li>
                                <?php endforeach; ?>
                            </ol>
                            <br>
                            <?php 
                            $first = true;
                            foreach ($proj["competences"] as $c): 
                                if ($c === "") {
                                    echo "</ul><br><ul>";
                                } else {
                                    if ($first) {
                                        echo "<ul>";
                                        $first = false;
                                    }
                                    echo "<li>" . htmlspecialchars($c) . "</li>";
                                }
                            endforeach; 
                            echo "</ul>";
                            ?>
                        </div>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 Simon Krumb</p>
    </footer>
</body>
</html>
