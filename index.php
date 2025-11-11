<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simon Krumb</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/global.css">
</head>
<body>
    <header>
        <h1>Krumb Simon</h1>
        <h2>Étudiant BUT Informatique</h2>
        <nav>
            <ul>
                <li class="current"><a href="./">Accueil</a></li>
                <!-- <li><a href="./projets/">Mon travail</a></li> -->
                <li><a href="./qui-suis-je/">Qui suis-je?</a></li>
                <li><a href="./contact/">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>
            Bienvenue sur mon portfolio!
        </h1>
        <h3> 
            Je suis KRUMB Simon, étudiant de 18 ans. Informatitien, scout laïque, et sportif a mes heures perdues!
            <br>
            Vous pouvez trouver plus d'informations concernant mes projets & experiences en cliquant dessus!
        </h3>
        <h1>MES PROJET</h1>
        <br>
        <div>
            <?php
            $jsonPath = './data/projets.json';
            if (file_exists($jsonPath)) {
                $jsonData = file_get_contents($jsonPath);
                $projects = json_decode($jsonData, true);

                $counter = 1;
                foreach ($projects as $key => $project) {
                    // Choose a fake terminal command
                    $command = ($counter <= 2) ? 'cd' : 'ls';

                    // Sanitize and output article
                    $nom = htmlspecialchars($project['nom']);

                    echo <<<HTML
                        <article>
                            <a href="./projets/projet.php?projetID={$key}">
                                <div>
                                    <h3>krumb@simon:~/$command "$nom"_</h3>
                                </div>
                            </a>
                        </article>
                    HTML;
                    $counter++;
                }
            } else {
                echo "<p>Erreur : le fichier projets.json est introuvable.</p>";
            }
            ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 Simon Krumb</p>
    </footer>
</body>
</html>
