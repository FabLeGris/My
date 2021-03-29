<?php
    include_once "_inc/Globals.class.php";
    $globals = new Globals;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Lien pour la feuille de style -->
    <link rel="stylesheet" href="style/style.css">
    <title>Titre de la page</title>
</head>
<body>
    <h1>Page vide de sens pour copier pour faciliter les tests</h1>
    <section>
        <h2>Sous-titre</h2>
        <article>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A sequi autem nisi similique laboriosam quo explicabo, accusamus sint sed eligendi dolores? Error iste voluptatum sit fugiat dignissimos earum eligendi labore!</p>
        </article>
        <article>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam laboriosam consequatur sequi earum aperiam accusantium deserunt minima, quidem minus iure dolorem voluptate voluptas quia ducimus nam fugit provident. Adipisci, voluptate.</p>
        </article>
    </section>
    <section>
        <!-- Redirection vers la même page -->
        <div id="formulaire">
            <h3>Formulaire de test</h3>
            <form action="<?= filter_var($globals->getENV, FILTER_SANITIZE_SPECIAL_CHARS) ?>" method="post">
                <div class="input">
                    <input type="text" name="nom" id="nom">
                </div>
                <div class="input bouton">
                    <input type="submit" value="Envoyer">
                </div>
            </form>
        </div>
    </section>
    <section>
        <h3>Zone de test pour javascript et l'essayer</h3>
        <!-- Zone de test pour le javascript -->
        <div id="afficherAvecJS">

        </div>
    </section>
    <!-- Lien pour le fichier javascript -->
    <script src="script/js.js"></script>
</body>
</html>
