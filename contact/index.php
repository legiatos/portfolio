<?php

if (isset($_GET["nom"])) {
    $oldData = file_get_contents("tentativeDeContact.json");
    $tempArray = json_decode($oldData, true);
    $json = array("nom" => $_GET["nom"],
                  "prenom" => $_GET["prenom"],
                  "mail" => $_GET["mail"],
                  "objet" => $_GET["objet"],
                  "message" => $_GET["message"]);
    $tempArray[] = $json;

    file_put_contents("tentativeDeContact.json", json_encode($tempArray));

}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <header>
        <h1>Krumb Simon</h1>
        <h2>Contact</h2>
        <nav>
        <ul>
            <li><a href="../">Accueil</a></li>
            <li><a href="../qui-suis-je/">Qui suis-je?</a></li>
            <li class="current"><a href="../contact/">Contact</a></li>
        </ul>
    </nav>
    </header>

    

    <main>
        <article>
            <h4>postgres=# SELECT * FROM CONTACTS;</h4>
            <div class="ascii-table-container">
                <table class="ascii-table">
                    <thead>
                        <tr>
                            <th><h4>Contact</h4></th>
                            <th><h4>Value</h4></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><h4>Nom</h4></th>
                            <td><p>KRUMB Simon</p></td>
                        </tr>
                        <tr>
                            <th><h4>Github</h4></th>
                            <td><p><a href="https://github.com/legiatos" target="_blank">https://github.com/legiatos</a></p></td>
                        </tr>
                        <!-- <tr>
                            <th><h4>E-Mail</h4></th>
                            <td><p><a href="mailto:simon.krumb@gmail.com" target="_blank">simon.krumb@gmail.com</a></p></td>
                        </tr> -->
                        <!-- <tr>
                            <th><h4>Adresse</h4></th>
                            <td><p>137 Ch. des Monts dessus 73000 Bassens</p></td>
                        </tr> -->
                        <tr>
                            <th><h4>Linkedin</h4></th>
                            <td><p><a href="https://fr.linkedin.com/in/simon-krumb-72961934a" target="_blank">https://fr.linkedin.com/in/simon-krumb-72961934a</a></p></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <h4>Contactez-moi !</h4>
            <div class="form">
                <form action="index.php">
                    <div>
                        <label><p>Nom: </p><input type="text" name="nom" id="nom" required></label>
                        <label><p>Prenom: </p><input type="text" name="prenom" id="prenom" required></label>
                    </div>
                    <label><p>Email: </p><input type="email" name="mail" id="mail" required></label>
                    

                    <label><p>Objet: </p><input type="text" name="objet" id="objet" required></label>
                    
                    <label><p>Message: </p><textarea name="message" id="message" required></textarea></label>
                    
                    <input type="submit" value="Envoyer">
                    <?php if (isset($_GET["nom"])) : ?>
                        <p>Merci de votre message, je vous contacterais des que possible !</p>
                    <?php endif; ?>
                </form>
                
            </div>
        </article>
    </main>

    <footer>
        <p>&copy; 2025 Simon Krumb</p>
    </footer>
</body>
</html>
